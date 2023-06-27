        <h1>Kisállat keresése</h1>
           <div class="inside">
                 <h2>Keresési űrlap</h2>
 <?php
 if(\Req::Post("search"))
 {
	
		echo '<div style="overflow-x: auto;">
	       <table>
	           <thead>
	               <tr>
	                   <th>Név</th>
	                   <th>Faj</th>
	                   <th>Kor</th>
	                   <th>Súly</th>
	                   <th>Szín</th>
	                   <th>Nem</th>
	                   <th>Ár</th>
	                   <th>Örökbe fogadás ideje</th>
	                   <th> </th>
	               </tr>
	           </thead>
	           <tbody>';
				   $animals = \Model\Animalsmodel::GetAnimalsByPref();
				   foreach ($animals as $anim)
				   {
						echo '<tr>
					   <th>'. $anim->name .'</th>
	                   <td>'. $anim->species .'</td>
	                   <td>'. $anim->age .'</td>
	                   <td>'. $anim->weight .'</td>
	                   <td>'. $anim->color .'</td>
	                   <td>'. $anim->sex .'</td>
	                   <td class="price">'. number_format($anim->price, 0, "", " ") .' HUF</td>
	                   <td>'. $anim->date .'</td>
	                 <td><a href="?page=edit&id='. $anim->id .'" title="Szerkesztés"><i class="h4 fa-							solid fa-square-pen"></i></a></td>
	                   <td><a href="" title="Törlés" data-bs-toggle="modal" data-bs-target="#delAnim'. $anim->id .'"><i class="h4 fa-solid fa-times text-danger"></i></a>';
			
			echo '<div class="modal" id="delAnim'. $anim->id .'">
					<div class="modal-dialog">
					  <div class="modal-content">
						<div class="modal-header">
						  <h4 class="modal-title">Rekord törlése</h4>
						  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
						  Biztosan törölni akarod a(z) "'. $anim->name .'" nevű állat rekordját?
						</div>
						<div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"							>Mégsem</button>
						  <a href="?page=del&id='. $anim->id .'" class="btn btn-danger">Igen,							törlöm</a>
						</div></div></div></div>';
			
			echo '</td></tr>';
				   }
             echo ' </tbody>
					</table>
					</div> ';
	
 }
 else 
 {
	 \View\FormView::SearchForm();
 }
 ?>
                </div>

