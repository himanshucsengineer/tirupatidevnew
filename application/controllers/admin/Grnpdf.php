<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Grnpdf extends CI_Controller {

function index()
    {
        $this->load->library('pdf');
        $html = $this->load->view('admin/GeneratePdfView', [], true);
        $this->pdf->createPDF($html, 'mypdf', false);
    }
}
