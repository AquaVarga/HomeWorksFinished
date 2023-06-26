          <h1>Regisztrált kisállataink</h1>
           <div class="inside">
                
	        
	       <div style="overflow-x: auto;">
	       <table>
	           <thead>
	               <tr>
	                   <th>Neve</th>
	                   <th>Faja</th>
	                   <th>Kora</th>
	                   <th>Súlya</th>
	                   <th>Színe</th>
	                   <th>Neme</th>
	                   <th>Ára</th>
	                   <th>Születési dátum</th>
	                   <th> </th>
	               </tr>
	           </thead>
	           <tbody>
				   <?php
				   $animals = \Model\Animalsmodel::GetAnimals();
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
				   ?>
               </tbody>
               </table>
               </div>
			   </div>
