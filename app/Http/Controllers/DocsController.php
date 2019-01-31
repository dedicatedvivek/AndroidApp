<?php

namespace App\Http\Controllers;
use App\Docs;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;


class DocsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insertdoc(Request $req)

    {
    	$user_name = $req->input('name');
    	$user_email = $req->input('email');
    	$user_doctype = $req->input('doctype');
    	$user_doc = $req->input('document');

        $data = array('user_name' =>$user_name ,'user_email' =>$user_email ,'document_type' =>$user_doctype,'document' =>$user_doc);

        Docs::insert($data);

       	echo "<script> window.alert('Submitted Successfully'); </script>";

       	return view("registration");
    }

    

}
