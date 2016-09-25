<?php
/*
 *	Fifty3
 *	Global footer template
 */
?>
	<footer class="global">
		<div class="wrapper">
			<h4>Stand <strong>Above</strong> the Noise</h4>
			<svg id="d88fd625-2acf-4e30-ba58-384219f72ce1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 108 95" width="108" height="95">
				<title>Fifty3 Logo</title>
				<path d="M86.82,50.11a2.28,2.28,0,0,1,2,2.4c.06,1.53.06,3.07,0,4.61a3.55,3.55,0,0,1-1.87,3.24,4.45,4.45,0,0,1-1.85.48,8.66,8.66,0,0,1-3-.21,3.24,3.24,0,0,1-2.45-2.86c-.16-1.25-.13-2.52-.19-3.8h2.69c0,.1,0,.22,0,.33,0,.89,0,1.79.08,2.68a1.55,1.55,0,0,0,1.1,1.47,2.32,2.32,0,0,0,2.28-.32,1.69,1.69,0,0,0,.58-1.28c0-1.38,0-2.77,0-4.15a1.48,1.48,0,0,0-1.56-1.39c-.72,0-1.45,0-2.17,0h-.34V49h.41a22.17,22.17,0,0,0,2.28-.08,1.41,1.41,0,0,0,1.37-1.4,13.85,13.85,0,0,0,0-3.69,1.54,1.54,0,0,0-1.42-1.38,3.88,3.88,0,0,0-1.31,0,1.61,1.61,0,0,0-1.24,1.58c-.06.55,0,1.1-.06,1.65,0,.26,0,.52,0,.8H79.46a15.45,15.45,0,0,1,.24-3.8,3.24,3.24,0,0,1,2.36-2.34,7.36,7.36,0,0,1,4.35.06,3.15,3.15,0,0,1,2.3,2.87,36.05,36.05,0,0,1,0,4.57,2.18,2.18,0,0,1-1.25,2C87.28,50,87.07,50,86.82,50.11Z" style="fill:#7ea8ad"/>
				<path d="M73,60.61H70.25v-.36c0-2.21,0-4.42,0-6.63a2.91,2.91,0,0,0-.14-.88q-2-6-4-12.07c0-.08,0-.17-.09-.3h2.63c.17,0,.24,0,.29.22q.86,3.09,1.73,6.17c.31,1.09.62,2.18,1,3.28l2.71-9.65h2.8l-.93,2.82q-1.6,4.85-3.21,9.7a1.63,1.63,0,0,0-.07.5q0,3.42,0,6.84Z" style="fill:#fff"/>
				<path d="M24.42,40.39h8.38v2.38H27.13v6.52H31.9v2.42H27.12v8.9h-2.7Z" style="fill:#fff"/>
				<path d="M43,40.39h8.38v2.38H45.68v6.52h4.77v2.42H45.68v8.9H43Z" style="fill:#fff"/>
				<path d="M63.91,40.41v2.37H60.42V60.6H57.7V42.8H54.17V40.41Z" style="fill:#fff"/>
				<path d="M38.82,60.61H36.15V40.4h2.68Z" style="fill:#fff"/>
				<path d="M60.77.4.15,32.3,9.16,76,68.09,94.6l36.69-21.77,3.07-37.62Zm-.05.75L82.18,17,38.49,12.84ZM.91,32.6l13.79-7.25L6.49,59.84Zm8.8,42.93-3-14.65L50,88.23ZM68,93.92,51.87,88.82l50.25-15.16Zm36.15-21.53L51.32,88.32,7,60.34,15.44,25l22-11.59,45.67,4.35L93.2,25.16l12.24,31.72ZM94.11,25.83l13.09,9.7-1.64,19.92Z" style="fill:#7ea8ad"/>
			</svg>
			<nav>
				<a href="http://www.agencyfifty3.com">AgencyFifty3.com</a>
				<a href="mailto:hello@fifty3.com">hello@fifty3.com</a>
				<span>4100 E Mississippi Ave</span>
				<span>Floor 15</span>
				<span>Denver, CO 80246</span>
			</nav>
			<nav class="social">
				<?
				$facebook = get_field('facebook_url', 'option');
				$twitter = get_field('twitter_url', 'option');
				$insta = get_field('instagram_url', 'option');
				
				if($facebook) {
					echo '<a href="' . $facebook . '"><i class="fa fa-facebook"></i><span>Facebook</span></a>';
				};
				if($insta) {
					echo '<a href="' . $insta . '"><i class="fa fa-instagram"></i><span>Instagram</span></a>';
				};
				if($twitter) {
					echo '<a href="' . $twitter . '"><i class="fa fa-twitter"></i><span>Twitter</span></a>';
				};
				?>
			</nav>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>