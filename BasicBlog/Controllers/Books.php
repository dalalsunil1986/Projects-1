<?php
namespace Project\Controllers;

use Books as Book;
use Method;

class Books extends Controller
{
	public function main()
	{
		$this->masterpage->title = 'Books';
		$this->masterpage->page  = 'Books.wizard';
		$this->masterpage->pdata = ['books' => Book::result()];
	}

	public function add()
	{
		if( Method::post('add') )
		{
		    if( Book::duplicateCheck()->insert('post') )
		    {
		        $this->masterpage->pdata['success'] = 'Successfully';
		    }
		    else
		    {
		         $this->masterpage->pdata['error'] = 'Already or ' . Book::error();
		    }
		}
		
		$this->masterpage->title = 'Add Book';
		$this->masterpage->page  = 'Books-add.wizard';
	}

	public function edit(Int $id)
	{
		if( Method::post('edit') )
		{
		    if( Book::update('post', 'id', $id) )
		    {
		        $this->masterpage->pdata['success'] = 'Successfully';
		    }
		}
		
		$this->masterpage->title = 'Edit Book';
		$this->masterpage->page  = 'Books-edit.wizard';
		$this->masterpage->pdata['book'] = Book::rowId($id);
	}

	public function delete(Int $id)
	{
		Book::delete('id', $id);
		
		redirect( prevUrl() );
	}
}