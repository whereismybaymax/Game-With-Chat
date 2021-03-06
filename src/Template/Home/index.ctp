<?php
echo $this->Html->script('socket.js');
?>
<div class="col-xs-12 top-container no-padding">
	<div class="col-xs-4 fill placeholder no-padding">
		<div class="top-side-division">
			<div class="division-header">
				<span style="float:left">Games/Lobbies</span>
		  <?php if (isset($user_id)): ?>
						<form method="post" accept-charset="utf-8" action="/lobbies/add">
							<button class="btn btn-primary" type="submit">New Lobby</button>
						</form>
		  <?php endif; ?>
			</div>
			<div class="list-group-container">
				<ul class="list-group lobbies selectable">
			<?= $this->element('lobby_list', array('lobbies' => $lobbies)) ?>
				</ul>
			</div>

		</div>
		<div class="bottom-side-division">
			<div class="division-header">
				<span>Online Players</span>
			</div>
			<div class="list-group-container">
				<ul class="list-group players selectable">
			<?= $this->element('player_list', array('players' => $players)) ?>
				</ul>
			</div>
		</div>

	</div>

	<div class="col-xs-8 fill">
		<div class="home-container">
			<div class="welcome-header">
				<h1>Welcome to URGame</h1>
			</div>
			<p>Create or Join a lobby to play checkers with another human.</p>
			<p>Click on the Lobbies or Players in the lists for detailed information.</p>
		<?php if (empty($user_id)): ?>
					<p>You must login to Join or Create lobbies.</p>
		<?php endif; ?>
			<div class="info-container">
			</div>
		</div>
	</div>
</div>
<div class="col-xs-12 bottom-container no-padding ">
	<?= $this->element('chat', array('messages' => $messages, $chat_id, $username, $user_id)) ?>
</div>
