	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<script src="assets/js/sweetalert.min.js"></script>

	</div>

	<footer class="text-center edg-footer">
		<div class="container p-3 text-content-footer">
			<section>
				<span><?php echo $GLOBALS["Business_Name"]; ?></span>
				<?php if (isset($GLOBALS["Business_Phone"])) { ?> - <span style="cursor: pointer;" onclick="window.open('tel:<?php echo $GLOBALS['Business_Phone']; ?>')"><?php echo $GLOBALS["Business_Phone"]; ?></span> <?php } ?>
				<?php if (isset($GLOBALS["Business_Email"])) { ?> <span> - <a href="mailto:<?php echo $GLOBALS["Business_Email"]; ?>" style="color: inherit; text-decoration: none;"><?php echo $GLOBALS["Business_Email"]; ?></a></span> <?php } ?>
				<?php if (isset($GLOBALS["Business_Address"])) { ?> - <span <?php if (isset($GLOBALS["Business_Map_Location"])) { ?> style="cursor: pointer;" onclick="window.open('<?php echo $GLOBALS['Business_Map_Location']; ?>')" <?php } ?>><?php echo $GLOBALS["Business_Address"]; ?></span><br> <?php } ?>
				<span>Copyright © <?php echo date("Y"); ?></span>
			</section>
		</div>
	</footer>

	</body>
	</div>
	
	<?php
	if(isset($GLOBALS["Business_WhatsApp_Button"]))
	{
	?>
		<a href="<?php echo $GLOBALS["Business_WhatsApp_Button"]; ?>" class="floating-whatsapp scale-in-center" target="_blank">
			<i class="fa fa-whatsapp my-floating-whatsapp"></i>
		</a>
	<?php 
	}
	?>
	</html>