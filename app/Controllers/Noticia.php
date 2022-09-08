<?php

namespace App\Controllers;

class Noticia extends BaseController
{
    public function view($page = 'noticia')
    {
        if (! is_file(APPPATH . 'Views/page/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('Template/header', $data)
            . view('page/' . $page)
            . view('Template/footer');
    }
}