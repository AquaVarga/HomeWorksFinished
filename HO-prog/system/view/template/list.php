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
	                   <td><a href="?page=edit&id='. $anim->id .'">Módosítás</a></td>
					   </tr>';
				   }
				   ?>
               </tbody>
               </table>
               </div>
			   </div>
