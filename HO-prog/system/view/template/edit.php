        <h1>Szerkesztés</h1>
           <div class="inside">
			<?php
			$id = \Model\Animalsmodel::getId();
			\View\EditView::NewForm($id);
			?>
        </div>

