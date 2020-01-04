<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;

class ArticleController extends Controller
{
  public function index(Request $request)
  {
    $page = $request->page ?? '1';

    $dom = new Dom();

    $dom = $dom->loadFromUrl("https://www.kooora.com");

    $html = $dom->outerHtml;

    return $html;
  }
}
