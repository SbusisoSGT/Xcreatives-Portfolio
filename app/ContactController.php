<?php
	require_once("Database.php");
	require_once("ContactQuery.php");


	class ContactController{
		/**
		* Store the contact query 
		*
		* @param array $request
		* @return $result
		*/
		public function store(array $request)
		{
			$contactQuery = new ContactQuery(new Database());
			$contactQuery->setProperties($request);
			$result = $contactQuery->save();
			
			return $result;
		}
	}