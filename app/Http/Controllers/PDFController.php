<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    // Existing method to generate a PDF
    public function generatePDF()
    {
        $customers = Customer::all();

        $pdf = PDF::loadView('pdf.customers', compact('customers'));

        return $pdf->download('customers.pdf');
    }

    // New method to view the PDF with users
    public function viewPDF()
    {
        // Fetch users from the database
        $users = Customer::all();

        // Load the PDF view with user data
        $pdf = PDF::loadView('pdf.view', compact('users'));

        return $pdf->stream('users.pdf');
    }
}
