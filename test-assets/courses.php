<?php

function getAll(){
	$objs = array();

	$c = new stdClass();
	$c->career = "Accounting";
	$c->courses = ["Bachelor of Business Administration (BBA) in Accounting",  
				   "Bachelor of Commerce (BCom) in Accounting", 
				   "Auditing", 
				   "Financial Accounting", 
				   "Forensic Accounting"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Administration";
	$c->courses = ["Office Management", 
			       "Office Manager Course" , 
			       "Office Administration Course", 
			       "Admin and Secretarial Course", 
			       "Basic Accounting"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Advertising";
	$c->courses = ["Digital advertising strategy", 
					"Advertising and society", 
					"Meta social media marketing", 
					"Introduction to Public Relations and the Media" , 
					"Launch your Online Business"];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Agriculture";
	$c->courses = ["Bachelor of Science in Agriculture", 
				   "Horticulture", 
				   "Soil Science",
				   "Land Management", 
				   "Animal Science"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Architecture";
	$c->courses = ["Architectural Design and Pre-Design Services for Architecture",
	               "Housing", 
	               "Physical Planning", 
	               "Facility Planning", 
	               "Community Agriculture",
	               "Urban Design"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Banking/Finance";
	$c->courses = ["Economic of Money and Banking", 
				   "Banking and Financial Institutions", 
				   "Digital Transformation in Financial Services", 
				   "Financial Services", 
				   "Capital Market"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Chemistry";
	$c->courses = ["Organic Chemistry in Biology and Drug Development" ,
				   "Organic Photochemistry", 
				   "Pericyclic Reactions Communication", 
				   "Bachelor of Science in Chemistry"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Computers";
	$c->courses = ["Bachelor of science in Computer Science", 
					"Web designing", 
					"VFX animation", 
					"Hardware and networking courses" , 
					"Computer agriculture"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Construction";
	$c->courses = ["Contruction engineering and management",
	               "Contruction Management", 
	               "Welding Courses", 
	               "Architecture Courses", 
	               "Civil Engineering"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Consumer Economics";
	$c->courses = ["Investment Analyst",
	               "Credit Analyst", 
	               "Data Analysis", 
	               "Business", 
	               "Business Intelligence"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Cosmetology";
	$c->courses = ["Intensive Academic English",
					"Intensive Language & Culture",
					"Intensive Language & Culture"];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Counseling";
	$c->courses = ["Education Specialist: Counseling (Non-Certification)",
					"Interpersonal Communication and Listening", "Cultural Competency",
					"Psychological First Aid"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Court Reporting";
	$c->courses = ["Shorthand Theory; Speed Building", 
					"Judicial Court Reporting", 
					"Federal and/or State Court Reporter",
					"Freelance Court"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Data Processing";
	$c->courses = ["Data Management", 
	               "Business Information System", 
	               "Data Mining", 
	               "Big Data Analytics"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Education";
	$c->courses = ["Teacher", "Supervisor", "Administration", "Consultant", "Specialization"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Engineering";
	$c->courses = ["Mechanical Engineering",
					"Civil Engineering", 
					"Electrical Engineering",
					"Chemical Engineering", 
					"Industrial Engineering"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Fashion Merchandising";
	$c->courses = ["Accounting", "Composition", "Design", "Economics", "Marketing"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Fine and Performing Arts";
	$c->courses = ["Painting", "Sculpture", "Animation", "Printmaking", "Photography"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Food and Hospitality";
	$c->courses = ["Culinary Arts", 
					"Food and Beverages Industry", 
					"Food Management", 
					"Beverages Technology"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Health Assistant";
	$c->courses = ["Medicine and Surgery", 
				   "Nursing Science", 
				   "Medical Laboratory Science", 
				   "Pharmacy", 
				   "Dentistry"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Insurance";
	$c->courses = ["Intermediate Course on Fire", 
				   "Intermediate Course on Marine Insurance",
				   "Intermediate Course on Reinsurance"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Interior Design";
	$c->courses = ["Master of Arts", 
				   "Fine of Arts", 
				   "Master of Professional Studies", 
				   "Master of Interior Architecture",
				   "Master in Interior Design"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "International Trade";
	$c->courses = ["Finance",
				   "Business", 
				   "History", 
				   "Political Science", 
				   "Marketing", 
				   "Economics"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Law";
	$c->courses = ["Business Law", 
				   "Criminal Law", 
				   "Environmental Law", 
				   "Health Care Law", 
				   "Public Law"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Marine Biology";
	$c->courses = ["Pathology", "Biochemistry", "Ecology", "Ocean Farming", 
					"Anatomy", "Development", "Reproduction", "Conservation"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Marketing/Sales";
	$c->courses = ["Consumer Behavior",
				   "Retail Management",
				   "Advertising and Brand Management",
				   "Strategic Marketing",
				   "Public Relations",
				   "Corporate image"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Mechanic/Machinist";
	$c->courses = ["Automative Course", 
	               "Bachelor of Science in Industrial Technology major in Automotive Technology",
	               "Associate in Automotive Technology", 
	               "Automotive Mechanical Assembly NC II"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Medical Records";
	$c->courses = ["Information Management", 
				   "Business Design and Innovation Management",
				   "Construction Management", 
				   "Corporate Management"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Medicine/Surgery";
	$c->courses = ["Medicine", "Surgery" , "Biochemistry" ,"Physiology" ,"Anatomy", "Nursing"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Nursing";
	$c->courses = ["Medicine", "Surgery" , "Biochemistry" ,"Physiology" ,"Anatomy", "Nursing"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Photography";
	$c->courses = ["Wedding Photography", 
				   "Advertising Photography", 
				   "Editorial Photography", 
				   "Image Editing and Management", 
				   "Photography Essential"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Physical Therapy";
	$c->courses = ["Physical Therapy Courses", 
				   "Kinesiology Course",
				   "Neuroscience Course", 
				   "Orthopedic Course", 
				   "Pediatrics Course"];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Political Science";
	$c->courses = ["Moral Foundations of Politics by Coursera",
				   "Citizen Politics in America: Public Opinion", 
				   "Elections", 
				   "Interest Groups and the Media",
				   "Global Politics", 
				   "Contemporary Issues in World Politics"];
	array_push($objs, $c);


	$c = new stdClass();
	$c->career = "Psychology";
	$c->courses = ["Experimental Psychology",
				   "Statistics",
				   "History of Psychology",
				   "Physiological Psychology", 
				   "Cognitive Psychology"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Public Relations";
	$c->courses = ["Course in Public Relations",
			       "International Career Institute", 
			       "International Career Institute", 
			       "Public Relations Management"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Radio and TV";
	$c->courses = ["Mass Communications", 
				   "Reporting",
				   "Digital Media",
				   "Speech and Announcing",
				   "Broadcast Writing", 
				   "Audio Production"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Real Estate";
	$c->courses = ["Business Administration",
				   "Graphic Design",
				   "Digital Marketing", 
				   "Accounting", 
				   "Graphic Design"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Travel";
	$c->courses = ["Bachelor of Tourism Management", 
					"Bachelors of Arts", 
					"Bachelor of Communication and Media",
					"Extended Tourism Management"];
	array_push($objs, $c);

	$c = new stdClass();
	$c->career = "Zoology";
	$c->courses = ["Ecology", 
				   "Animal Physiology",
				   "Entomology",
				   "Biochemistry", 
				   "Ornithology", 
				   "Herpetology"];
	array_push($objs, $c);

	return $objs;
}


function getRelatedCourses($career){
	$courses = array();
	foreach (getAll() as $obj) {
		if($obj->career == $career){
			$courses = $obj->courses;
			break;
		}
	}
	return $courses;
}



?>