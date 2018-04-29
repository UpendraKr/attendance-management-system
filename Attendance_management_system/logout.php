<?php
   session_start();                                       /*we write 'session _start();' in the page whenever we use session variale or distroy*/
                                                                        
   
   if(session_destroy())                                                /*in log out page we distroy session means we distroy value which was stored in session variable*/
   {
      header("Location: index.html");
   }
?>