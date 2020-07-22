
        <?php if ($_GET['success'] == 'true') : ?>
          <h1>Vielen Dank für Ihre Nachricht</h1>
          <p>Wir werden uns in Kürze bei Ihnen melden!</p>
        <?php else: ?>
          <h1>Fehler</h1>
            <?php if ($_GET['error'] == 'spam') : ?>
              <p>Ihre Nachricht wurde als Spam eingestuft.</p>
            <?php endif; ?>
            <?php if ($_GET['error'] == 'email') : ?>
              <p>Ihre E-Mail-Adresse scheint nicht in Ordnung zu sein.</p>
            <?php endif; ?>
          <p>Bitte gehen Sie zurück und überprüfen Sie nochmals Ihre Angaben! <br>
          Alternativ können Sie direkt bei uns anrufen: <a class="phone selectall" href="tel:+1234" >+49&nbsp;12&thinsp;34&thinsp;56&thinsp;78</a></p>
          <p>Vielen Dank!</p>
        <?php endif; ?>
