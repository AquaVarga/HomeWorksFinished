<section class="EditForm">
			<h1>Szerkesztés</h1>
           <div class="inside">
			<?php
			$id = \Model\Animalsmodel::getId();
			\View\FormView::EditForm($id);
			?>
        </div>
</section>

