/**
 	* Permatech Template by ss-vector

	   Created with help of the following libraries:

	   -Responsive Slides
	   -Swiperjs
 		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	    <!-- Bootstrap core CSS -->

	    <!-- Additional Scripts -->

	    <script language = "text/Javascript"> 
	      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
	      function clearField(t){                   //declaring the array outside of the
	      if(! cleared[t.id]){                      // function makes it static and global
	          cleared[t.id] = 1;  // you could use true and false, but that's more typing
	          t.value='';         // with more chance of typos
	          t.style.color='#fff';
	          }
	      }
	    </script>
