<?php

include "inc/functions.php";

$body = <<<EOT
<DIv class="ban">
<p>Thank you for your interest in contributing a translation to infinity. This page will teach you how.</p>

<p><em>Historical note: infinity is based on a project called vichan (pronunced 6chan) which is in turn based on an older, abandoned project called Tinyboard. Vichan uses a service called Transifex to translate their files. In earlier versions of infinity, I decided to just keep using the vichan files because the only substantial source of new strings was the homepage and the Board configuration page, neither of which were displayed to board users so the existing set of translations worked. However, as time went on and more scripts and features were contributed, strings became out of sync. I originally intended to create 8chan a Transifex account, <s>but Transifex charges for something as simple as bulk imports</s>, so we will use this slightly more complicated process instead. Further, despite how much their charismatic CEO tried to sugarcoat it, the Transifex company <a href="https://github.com/transifex/transifex/issues/206#issuecomment-15243207">abandoned their open source repository</a> and became proprietary software, and then <s>immediately put limits on imports/exports</s>. <a href="https://www.gnu.org/philosophy/who-does-that-server-really-serve.html">Please see this page from the Free Software Foundation for more about the philosophy behind this and the dangers of trusting SaaS with your data. Who does that server really serve?</a></em></p>

<p>Some of my criticism of Transifex was not accurate, I apologize. You are free to either use Transifex or follow the steps below. <a href="https://www.transifex.com/projects/p/infinity/">Here's our Transifex team page</a></p>

<p>infinity uses gettext files for translation. This is what allows us to have boards in many languages on the same site, such as <a href="/argentina/">/argentina/ in Spanish</a>, <a href="/deutsch/">/deutsch/ in German</a> and <a href="/japan2/">/japan2/ in Japanese</a>. gettext files have the .po file extension. You can edit PO files by hand, but I highly recommend using POEdit. It is very easy to make syntax errors without POEdit or similar software.</p>
<ol>
	<li>Install <a href="http://poedit.net/">POEdit</a>. POEdit is free software available for Mac, Linux and Windows.</li>
	<li>Find your translation file. Go to <a href="https://github.com/ctrlcctrlv/infinity/">our Github project</a>, and in the files list click "inc", then "locale". You will see a list of languages. It's usually self explanatory which code is for which language, but if you're not sure you can check <a href="https://www.gnu.org/software/gettext/manual/html_node/Usual-Language-Codes.html#Usual-Language-Codes">the GNU project's list of usual language codes</a> and search for your language.</li> 
</ol>
<p><strong>If your language is listed and you want to update the translation:</strong></p>
<ol>
	<li>Download the .po files. <tt>tinyboard.po</tt> contains the strings generated by PHP, like "Comment", "Name", et cetera. <tt>javascript.po</tt> contains the strings generated by JavaScript, like all the fields under [Options]. You can translate one or both. For example, <a href="https://github.com/ctrlcctrlv/infinity/blob/master/inc/locale/fr_FR/LC_MESSAGES/tinyboard.po">here is the French translation of tinyboard.po</a>. To download it, click "Raw" and then save the file to your computer.</li>
	<li>Click "Edit a translation" in POEdit. Navigate to the file you downloaded, fill in the translation boxes and save your file.</li>
</ol>
<p><strong>If your language is not listed and you want to add a translation for it:</strong></p>
<ol>
	<li>Download the en <em>English</em> .po file. (Tip: If, for example, you want to create a new Spanish dialect translation when Spanish (Spain) already exists, download es_ES and use that as the template.)</li>
	<li>Click "Create a new translation" in POEdit and select the po file you downloaded as the template file.</li>
	<li>Select your language from the dropdown when prompted.</li>
</ol>

<p><em>Tip: If you would like to attribute your translation to you, you can change your Name and Email in Preferences.</em></p>
<p><em>Another tip: You might find that a string you want to translate is not in the files. Don't panic, I accidentally forget to put strings in {% trans %} tags and _() gettext function all the time so gettext doesn't catch them. Just email me and tell me where I forgot and I'll add it and update tinyboard.po/javascript.po. Some strings I don't want to add for legal reasons. Those are the ones at the bottom including the copyright notice.</em></p>

<p>Once you are done translating, save your .po file in POEdit and send it to admin@8chan.co, or, if you know how, open a pull request on Github with your translated file. Make sure to put the language you translated to in the subject of your email. Thanks in advance for your contribution!</p>
</div>
EOT;

echo Element("page.html", array("config" => $config, "body" => $body, "title" => "Translation tutorial"));
