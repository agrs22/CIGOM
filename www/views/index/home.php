
<body class="bg-dark">
  <div class="container">
  
  <div class="row">
        <div class="mt-5 col-lg-12">
		
		 <div id="map" style="height: 600px" ></div>
			<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
			  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
			  crossorigin=""/>
			<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
			  integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
			  crossorigin=""></script>
			  
			<script src="res/js/ar.js"></script>
			<?php
				$datafiles = Coordinate::filelist('data');
				foreach($datafiles as $file){
				$data = Coordinate::latlon($file);?>
				<script type="text/javascript">
				var data = <?php echo json_encode($data);?>;
				var cents = genrectangle(data);
				maplatcent = maplatcent + cents[0];
				maploncent = maploncent + cents[1];
				sets = sets + 1;
				</script>
				<?php
				}
			?>
			<script type="text/javascript">
				map.setView([maplatcent/sets,maploncent/sets], 3);
		    </script>
		</div>
    </div>
    
  </div>
  </body>