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
	                   <th>Elérhető</th>
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
	                   <td>'. $anim->available .'</td>
	                   <td><a href="">Adatlap</a></td>
					   </tr>';
				   }
               /*<tr>
	                   <th>Gizella</th>
	                   <td>Hörcsög</td>
	                   <td>32 éves</td>
	                   <td class="price">10 100 HUF</td>
	                   <td>Elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>
	                <tr>
	                   <th>Róbert</th>
	                   <td>Tengerimalac</td>
	                   <td>6 éves</td>
	                   <td class="price">15 100 HUF</td>
	                   <td>Elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>
	                <tr>
	                   <th>Janka</th>
	                   <td>Kígyó</td>
	                   <td>2 éves</td>
	                   <td class="price">101 100 HUF</td>
	                   <td>Nem elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>
	               <tr>
	                   <th>Gizella</th>
	                   <td>Hörcsög</td>
	                   <td>32 éves</td>
	                   <td class="price">10 100 HUF</td>
	                   <td>Elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>
	                <tr>
	                   <th>Róbert</th>
	                   <td>Tengerimalac</td>
	                   <td>6 éves</td>
	                   <td class="price">15 100 HUF</td>
	                   <td>Elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>
	                <tr>
	                   <th>Janka</th>
	                   <td>Kígyó</td>
	                   <td>2 éves</td>
	                   <td class="price">101 100 HUF</td>
	                   <td>Nem elérhető</td>
	                   <td><a href="">Adatlap</a></td>
	               </tr>*/
				   ?>
               </tbody>
               </table>
               </div>
			   </div>
