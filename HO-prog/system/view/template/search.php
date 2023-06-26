        <h1>Kisállat keresése</h1>
           <div class="inside">
                 <h2>Keresési űrlap</h2>
 <?php
 if(\Req::Post("search"))
 {
	 \View\SearchView::ListSearchedData();
 }
 else 
 {
 \View\SearchView::NewForm();
 }
 ?>
                </div>

