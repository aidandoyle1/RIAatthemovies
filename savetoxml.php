<?php

  $fname = $_POST["name"];
  $femail = $_POST["email"];
  $fmovie = $_POST["movie"];
  $freview = $_POST["review"];
  
  
  
  $doc = new DOMDocument(); 
  $doc->formatOutput = true; 
   
  $r = $doc->createElement( "contact_form" ); 
  $doc->appendChild( $r );

 // this is to make sure the old list stays in place
  $olddoc = new DOMDocument(); 
  $olddoc->load( "contact_form.xml" );
     
  $contacts = $olddoc->getElementsByTagName( "contact" );
  if($contacts){
    foreach( $contacts as $contact ) 
    { 
      
      /*Naming where all the elements and values will be places*/
      $b = $doc->createElement( "contact" );
      
      $names = $contact->getElementsByTagName( "name" ); 
      $n = $names->item(0)->nodeValue;
     
      $name = $doc->createElement( "name" ); 
      $name->appendChild( 
      $doc->createTextNode( $n ) 
      ); 
      $b->appendChild( $name ); 
      
      
      $emails= $contact->getElementsByTagName( "email" ); 
      $e = $emails->item(0)->nodeValue; 
      
      $email = $doc->createElement( "email" ); 
      $email->appendChild( 
      $doc->createTextNode( $e ) 
      ); 
      $b->appendChild( $email ); 
      
      
      $movie = $contact->getElementsByTagName( "movie" ); 
      $mo = $movie->item(0)->nodeValue;
      
      $movie = $doc->createElement( "movie" ); 
      $movie->appendChild( 
      $doc->createTextNode( $mo ) 
      );
      
      $b->appendChild( $movie ); 
       
      $review = $contact->getElementsByTagName( "review" ); 
      $m = $review->item(0)->nodeValue;
      
      $message = $doc->createElement( "review" ); 
      $message->appendChild( 
      $doc->createTextNode( $m ) 
      );
      
    
       
      $r->appendChild( $b );
      
    }
  }
   
  $b = $doc->createElement( "contact" ); 
   
  $name = $doc->createElement( "name" ); 
  $name->appendChild( 
  $doc->createTextNode( $fname ) 
  ); 
  $b->appendChild( $name ); 
   
  $email = $doc->createElement( "email" ); 
  $email->appendChild( 
  $doc->createTextNode( $femail ) 
  ); 
  $b->appendChild( $email ); 
  
  $movie = $doc->createElement( "movie" ); 
  $movie->appendChild( 
  $doc->createTextNode( $fmovie ) 
  );
  
  $b->appendChild( $movie ); 
   
  $review = $doc->createElement( "review" ); 
  $review->appendChild( 
  $doc->createTextNode( $freview ) 
  );
  
  $b->appendChild( $review ); 
   
  $r->appendChild( $b ); 
  
   /* javascript to alets the user that the view has been done*/
  $doc->save("contact_form.xml");
  include "contact.html";
  echo "<script>alert('Thank you for your review')</script>";

?>