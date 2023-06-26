<?php
namespace Controller;

class PageController
{	
public static function List() 
	{
	\View\PageView::PageBegin();
	require_once 'system/view/template/list.php';
	\View\PageView::PageEnd();
	}
public static function New() 
	{
	\View\PageView::PageBegin();
	require_once 'system/view/template/new.php';
	\View\PageView::PageEnd();
	}
public static function Search() 
	{
	\View\PageView::PageBegin();
	require_once 'system/view/template/search.php';
	\View\PageView::PageEnd();
	}
public static function Edit()
	{
	\View\PageView::PageBegin();
	require_once 'system/view/template/edit.php';
	\View\PageView::PageEnd();
	}
}