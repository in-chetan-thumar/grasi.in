<?php

namespace App\Helpers;

use App\Models\MasterDistrict;
use App\Models\MasterStates;
use Carbon\CarbonPeriod;

use Illuminate\Support\Facades\Http;

class CommonHelper
{
    /* Rendom password  generate */
    public function randomPasswordGenerator()
    {
        $digits = array_flip(range('0', '9'));
        $lowercase = array_flip(range('a', 'z'));
        $uppercase = array_flip(range('A', 'Z'));
        $special = array_flip(str_split('!@#$%^&*()_+=-}{[}]\|;:<>?/'));
        $combined = array_merge($digits, $lowercase, $uppercase, $special);

        $password = str_shuffle(array_rand($digits) .
            array_rand($lowercase) .
            array_rand($uppercase) .
            array_rand($special) .
            implode(array_rand($combined, rand(4, 4))));

        //dd(strlen($password),$password);
        return $password;
    }

    /* Rendom string generate */
    public function randomString($length)
    {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    /* Generate numeric otp */
    public function numericOTP()
    {
        return rand(111111, 999999);
    }

    /* Email masking */
    function maskEmailAddress($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            list($first, $last) = explode('@', $email);
            $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first) - 3), $first);
            $last = explode('.', $last);
            $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0']) - 1), $last['0']);
            $hideEmailAddress = $first . '@' . $last_domain . '.' . $last['1'];
            return $hideEmailAddress;
        } else {
            return NULL;
        }
    }

    /* Phone number masking */
    function maskPhoneNumber($phone)
    {
        if (!empty($phone)) {
            return config('constants.COUNTRY_CODE') . substr($phone, 0, 2) . str_repeat("*", strlen($phone) - 4) . substr($phone, -2);
        } else {
            return NULL;
        }
    }

    /* Generate date range */
    function generateDateRange($params)
    {
        $data = [];
        $getMonthsList = CarbonPeriod::create($params['start_date'], '1 month', $params['end_date']);
        foreach ($getMonthsList as $dt) {
            $data[$dt->format("M")] = 0;
        }
        return $data;
    }

    /* Financial Yea number */
    function getFinancialYear($inputDate, $format = "Y")
    {
        $date = date_create($inputDate);
        if (date_format($date, "m") >= 4) {
            //On or After April (FY is current year - next year)
            $financial_year = (date_format($date, $format)) . '-' . (date_format($date, $format) + 1);
        } else {
            //On or Before March (FY is previous year - current year)
            $financial_year = (date_format($date, $format) - 1) . '-' . date_format($date, $format);
        }

        return $financial_year;
    }

    /* Generate state list array */
    function stateList()
    {
        return MasterStates::orderBy('state', 'ASC')->pluck('state', 'id');
    }

    /* Generate state list array */
    function districtList()
    {
        return MasterDistrict::orderBy('district', 'ASC')->select('id', 'state_id', 'district')->get()->toarray();
    }

    /* Generate district list array by state */
    function districtListByState($id)
    {
        return MasterDistrict::where('state_id', $id)->orderBy('district', 'ASC')->pluck('district', 'id');
    }

    /* Generate error message */
    function generateErrorMessage($e)
    {
        if (env('APP_ENV') == 'PRODUCTION') {
            return "Something went wrong.Please contact to administrator";
        } else {
            return "Message:" . $e->getMessage() . " Filename:" . $e->getFile() . " Line:" . $e->getLine();
        }
    }

    public function CreateLead($request, $Lead_Source)
    {
        $url = 'https://www.zohoapis.in/crm/v2/functions/create_lead_from_website/actions/execute?auth_type=apikey&zapikey=1003.6bf41c62b6652557cb3dbe87b5649a1c.70669e4dfa0684f2c5672475b403ff9c';
        $response = Http::post($url, [
            'First_Name' => $request->first_name ?? "",
            'Last_Name' => $request->last_name ?? "",
            'Email' => $request->email ?? "",
            'Mobile' => $request->mobile ?? "",
            'Subject' => $request->subject ?? '',
            'Message' => $request->message ?? '',
            'Brand' => $request->brand ?? "",
            'State' => ($Lead_Source == 'Window Films Enquiry') ? config('constants.LLUMAR_WINDOW_FILMS.STATES.' . $request->state) : ($request->state ?? ""),
            'City' => $request->city ?? "",
            'Pin_code' => $request->pincode ?? "",
            'Lead_Source' => $Lead_Source,
            'Project_Type' => (config('constants.LLUMAR_WINDOW_FILMS.PROJECT_TYPE.' . $request->project_type) ?? ''),
            'Type_Of_Film_Required' => (config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_FILM.' . $request->type_of_film) ?? ''),
            'Type_Of_Property' => (config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_PROPERTY.' . $request->type_of_property) ?? ''),
            'Company' => $request->company_name ?? '',
            'WhatsApp_Number' => $request->whatsapp_number ?? '',
        ]);
        // $data = [
        //     'First_Name' => $request->first_name ?? null,
        //     'Last_Name' => $request->last_name ?? null,
        //     'Email' => $request->email ?? null,
        //     'Mobile' => $request->mobile ?? null,
        //     'Subject' => $request->subject ?? '',
        //     'Message' => $request->message ?? '',
        //     'Brand' => $request->brand ?? '',
        //     'State' => ($Lead_Source == 'Window Films Enquiry') ? config('constants.LLUMAR_WINDOW_FILMS.STATES.' . $request->state) : ($request->state ?? null),
        //     'City' => $request->city ?? null,
        //     'Pin_code' => $request->pincode ?? null,
        //     'Lead_Source' => $Lead_Source,
        //     'Project_Type' => $request->project_type ? config('constants.LLUMAR_WINDOW_FILMS.PROJECT_TYPE.' . $request->project_type) : null,
        //     'Type_Of_Film_Required' => $request->type_of_film ? config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_FILM.' . $request->type_of_film) : null,
        //     'Type_Of_Property' => $request->type_of_property ? config('constants.LLUMAR_WINDOW_FILMS.TYPE_OF_PROPERTY.' . $request->type_of_property) : null,
        //     'Company' => $request->company_name ?? null,
        //     'WhatsApp_Number' => $request->whatsapp_number ?? null,
        // ];
        // if ($response->status() == 200) {
        //     toastr()->success('Your enquire has been submitted successfully! ' . $response->body());
        // } else {
        //     return 'Unexpected HTTP status: ' . $response->status() . ' ' . $response->body();
        // }
    }
}