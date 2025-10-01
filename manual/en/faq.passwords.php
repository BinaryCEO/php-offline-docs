<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Password Hashing - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/faq.passwords.php">
 <link rel="shorturl" href="https://www.php.net/passwords">
 <link rel="alternate" href="https://www.php.net/passwords" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.using.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.html.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.passwords.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.passwords.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.passwords.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.passwords.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.passwords.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.passwords.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.passwords.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.passwords.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.passwords.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.passwords.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.passwords.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Hashing passwords safely and securely" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Password Hashing - Manual" />
<meta name="twitter:description" content="Hashing passwords safely and securely" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Password Hashing - Manual" />
<meta itemprop="description" content="Hashing passwords safely and securely" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Hashing passwords safely and securely" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="faq.html.php">
          PHP and HTML &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.using.php">
          &laquo; Using PHP        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='faq.php'>FAQ</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/faq.passwords.php' selected="selected">English</option>
            <option value='de/faq.passwords.php'>German</option>
            <option value='es/faq.passwords.php'>Spanish</option>
            <option value='fr/faq.passwords.php'>French</option>
            <option value='it/faq.passwords.php'>Italian</option>
            <option value='ja/faq.passwords.php'>Japanese</option>
            <option value='pt_BR/faq.passwords.php'>Brazilian Portuguese</option>
            <option value='ru/faq.passwords.php'>Russian</option>
            <option value='tr/faq.passwords.php'>Turkish</option>
            <option value='uk/faq.passwords.php'>Ukrainian</option>
            <option value='zh/faq.passwords.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.passwords" class="chapter">
  <h1 class="title">Hashing passwords safely and securely</h1>

  
  
  <p class="simpara">
   This section explains the reasons behind using hashing functions
   to secure passwords, as well as how to do so effectively.
  </p>
  
  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.passwords.hashing">
     
      Why should passwords supplied by users be hashed?
     
    </a></li><li><a href="#faq.passwords.fasthash">
     
      Why are common hashing functions such as md5 and
      sha1 unsuitable for passwords?
     
    </a></li><li><a href="#faq.passwords.bestpractice">
     
      How should passwords be hashed, if the common hash functions are
      not suitable?
     
    </a></li><li><a href="#faq.passwords.salt">
     
      What is a salt?
     
    </a></li><li><a href="#faq.password.storing-salts">
     
      How are salts stored?
     
    </a></li></ol></div>
   <dl class="qandaentry" id="faq.passwords.hashing">
    <dt><strong>
     <p class="simpara">
      Why should passwords supplied by users be hashed?
     </p>
    </strong></dt>
    <dd class="answer">
     <p class="simpara">
      Password hashing is one of the most basic security considerations that
      must be made when designing any application or service that accepts passwords
      from users. Without hashing, any passwords that are stored
      can be stolen if the data store is compromised, and
      then immediately used to compromise not only the application or service, but also
      the accounts of users on other services, if they do not use
      unique passwords.
     </p>
     <p class="simpara">
      By applying a hashing algorithm to the user&#039;s passwords before storing
      them, it becomes implausible for any attacker to
      determine the original password, while still being able to compare
      the resulting hash to the original password in the future.
     </p>
     <p class="simpara">
      It is important to note, however, that hashing passwords only protects
      them from being compromised in the data store, but does not necessarily
      protect them from being intercepted by malicious code injected into the
      application or service itself.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.passwords.fasthash">
    <dt><strong>
     <p class="simpara">
      Why are common hashing functions such as <span class="function"><a href="function.md5.php" class="function">md5()</a></span> and
      <span class="function"><a href="function.sha1.php" class="function">sha1()</a></span> unsuitable for passwords?
     </p>
    </strong></dt>
    <dd class="answer">
     <p class="simpara">
      Hashing algorithms such as MD5, SHA1 and SHA256 are designed to be
      very fast and efficient. With modern techniques and computer equipment,
      it has become trivial to <q class="quote">brute force</q> the output of these algorithms,
      in order to determine the original input.
     </p>
     <p class="simpara">
      Because of how quickly a modern computer can <q class="quote">reverse</q> these hashing
      algorithms, many security professionals strongly suggest against
      their use for password hashing.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.passwords.bestpractice">
    <dt><strong>
     <p class="simpara">
      How should passwords be hashed, if the common hash functions are
      not suitable?
     </p>
    </strong></dt>
    <dd class="answer">
     <p class="simpara">
      When hashing passwords, the two most important considerations are the
      computational expense, and the salt. The more computationally expensive
      the hashing algorithm, the longer it will take to brute force its
      output.
     </p>
     <p class="simpara">
      PHP provides
      <a href="book.password.php" class="link">a native password hashing API</a> that
      safely handles both <a href="function.password-hash.php" class="link">hashing</a>
      and <a href="function.password-verify.php" class="link">verifying passwords</a>
      in a secure manner.
     </p>
     <p class="simpara">
      The suggested algorithm to use when hashing passwords is Blowfish, which
      is also the default used by the password hashing API, as it is
      significantly more computationally expensive than MD5 or SHA1, while
      still being scalable.
     </p>
     <p class="simpara">
      The <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> function is also available for password
      hashing, but it is only recommended for interoperability with other
      systems.
      Instead, it is strongly encouraged to use the
      <a href="book.password.php" class="link">native password hashing API</a>
      whenever possible.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.passwords.salt">
    <dt><strong>
     <p class="simpara">
      What is a salt?
     </p>
    </strong></dt>
    <dd class="answer">
     <p class="simpara">
      A cryptographic salt is data which is applied during the hashing process
      in order to eliminate the possibility of the output being looked up
      in a list of pre-calculated pairs of hashes and their input, known as
      a rainbow table.
     </p>
     <p class="simpara">
      In more simple terms, a salt is a bit of additional data which makes
      hashes significantly more difficult to crack. There are a number of
      services online which provide extensive lists of pre-computed hashes, as
      well as the original input for those hashes. The use of a salt makes it
      implausible or impossible to find the resulting hash in one of these
      lists.
     </p>
     <p class="simpara">
      <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> will create a random salt if one
      isn&#039;t provided, and this is generally the easiest and most secure
      approach.
     </p>
    </dd>
   </dl>
   <dl class="qandaentry" id="faq.password.storing-salts">
    <dt><strong>
     <p class="simpara">
      How are salts stored?
     </p>
    </strong></dt>
    <dd class="answer">
     <p class="simpara">
      When using <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span> or
      <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span>, the return value includes the salt as part
      of the generated hash. This value should be stored verbatim in the
      database, as it includes information about the hash function that was
      used and can then be given directly to
      <span class="function"><a href="function.password-verify.php" class="function">password_verify()</a></span> when verifying passwords.
     </p>
     <div class="warning"><strong class="warning">Warning</strong>
      <p class="simpara">
       <span class="function"><a href="function.password-verify.php" class="function">password_verify()</a></span> should always be used instead
       of re-hashing and comparing the result to a stored hash in order
       to avoid timing attacks.
      </p>
     </div>
     <p class="simpara">
      The following diagram shows the format of a return value from
      <span class="function"><a href="function.crypt.php" class="function">crypt()</a></span> or <span class="function"><a href="function.password-hash.php" class="function">password_hash()</a></span>. As can
      be seen, they are self-contained, with all the information on the
      algorithm and salt required for future password verification.
     </p>
     <p class="para">
      <div class="mediaobject">
       
       <div class="imageobject">
        <img src="images/2a34c7f2e658f6ae74f3869f2aa5886f-crypt-text-rendered.svg" alt="
        The components of the value returned by password_hash and crypt: in
        order, the chosen algorithm, the algorithm's options, the salt used,
        and the hashed password.
       " width="690" height="192" />
       </div>
      </div>
     </p>
    </dd>
   </dl>
  
  
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/faq/passwords.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.passwords%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.passwords&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.passwords.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="114618">  <div class="votes">
    <div id="Vu114618">
    <a href="/manual/vote-note.php?id=114618&amp;page=faq.passwords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114618">
    <a href="/manual/vote-note.php?id=114618&amp;page=faq.passwords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114618" title="63% like this...">
    150
    </div>
  </div>
  <a href="#114618" class="name">
  <strong class="user"><em>alf dot henrik at ascdevel dot com</em></strong></a><a class="genanchor" href="#114618"> &para;</a><div class="date" title="2014-03-12 07:58"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114618">
<div class="phpcode"><code><span class="html">I feel like I should comment some of the clams being posted as replies here.<br /><br />For starters, speed IS an issue with MD5 in particular and also SHA1. I've written my own MD5 bruteforce application just for the fun of it, and using only my CPU I can easily check a hash against about 200mill. hash per second. The main reason for this speed is that you for most attempts can bypass 19 out of 64 steps in the algorithm. For longer input (&gt; 16 characters) it won't apply, but I'm sure there's some ways around it.<br /><br />If you search online you'll see people claiming to be able to check against billions of hashes per second using GPUs. I wouldn't be surprised if it's possible to reach 100 billion per second on a single computer alone these days, and it's only going to get worse. It would require a watt monster with 4 dual high-end GPUs or something, but still possible.<br /><br />Here's why 100 billion per second is an issue:<br />Assume most passwords contain a selection of 96 characters. A password with 8 characters would then have 96^8 = 7,21389578984e+15 combinations.<br />With 100 billion per second it would then take 7,21389578984e+15 / 3600 = ~20 hours to figure out what it actually says. Keep in mind that you'll need to add the numbers for 1-7 characters as well. 20 hours is not a lot if you want to target a single user. <br /><br />So on essence:<br />There's a reason why newer hash algorithms are specifically designed not to be easily implemented on GPUs.<br /><br />Oh, and I can see there's someone mentioning MD5 and rainbow tables. If you read the numbers here, I hope you realize how incredibly stupid and useless rainbow tables have become in terms of MD5. Unless the input to MD5 is really huge, you're just not going to be able to compete with GPUs here. By the time a storage media is able to produce far beyond 3TB/s, the CPUs and GPUs will have reached much higher speeds.<br /><br />As for SHA1, my belief is that it's about a third slower than MD5. I can't verify this myself, but it seems to be the case judging the numbers presented for MD5 and SHA1. The issue with speeds is basically very much the same here as well.<br /><br />The moral here:<br />Please do as told. Don't every use MD5 and SHA1 for hasing passwords ever again. We all know passwords aren't going to be that long for most people, and that's a major disadvantage. Adding long salts will help for sure, but unless you want to add some hundred bytes of salt, there's going to be fast bruteforce applications out there ready to reverse engineer your passwords or your users' passwords.</span></code></div>
  </div>
 </div>
  <div class="note" id="119525">  <div class="votes">
    <div id="Vu119525">
    <a href="/manual/vote-note.php?id=119525&amp;page=faq.passwords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119525">
    <a href="/manual/vote-note.php?id=119525&amp;page=faq.passwords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119525" title="60% like this...">
    28
    </div>
  </div>
  <a href="#119525" class="name">
  <strong class="user"><em>swardx at gmail dot com</em></strong></a><a class="genanchor" href="#119525"> &para;</a><div class="date" title="2016-06-29 09:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119525">
<div class="phpcode"><code><span class="html">A great read..<br /><br /><a href="https://nakedsecurity.sophos.com/2013/11/20/serious-security-how-to-store-your-users-passwords-safely/" rel="nofollow" target="_blank">https://nakedsecurity.sophos.com/2013/11/20/serious-security-how-to-store-your-users-passwords-safely/</a><br /><br />Serious Security: How to store your users’ passwords safely<br /><br />In summary, here is our minimum recommendation for safe storage of your users’ passwords:<br /><br />    Use a strong random number generator to create a salt of 16 bytes or longer.<br />    Feed the salt and the password into the PBKDF2 algorithm.<br />    Use HMAC-SHA-256 as the core hash inside PBKDF2.<br />    Perform 20,000 iterations or more. (June 2016.)<br />    Take 32 bytes (256 bits) of output from PBKDF2 as the final password hash.<br />    Store the iteration count, the salt and the final hash in your password database.<br />    Increase your iteration count regularly to keep up with faster cracking tools.<br /><br />Whatever you do, don’t try to knit your own password storage algorithm.</span></code></div>
  </div>
 </div>
  <div class="note" id="126448">  <div class="votes">
    <div id="Vu126448">
    <a href="/manual/vote-note.php?id=126448&amp;page=faq.passwords&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126448">
    <a href="/manual/vote-note.php?id=126448&amp;page=faq.passwords&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126448" title="45% like this...">
    -4
    </div>
  </div>
  <a href="#126448" class="name">
  <strong class="user"><em>tamas at microwizard dot com</em></strong></a><a class="genanchor" href="#126448"> &para;</a><div class="date" title="2021-09-22 08:23"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126448">
<div class="phpcode"><code><span class="html">While I am reading the comments some old math lessons came into my mind and started thinking. Using constants in a mathematical algorythms do not change the complexity of the algorythm itself.<br /><br />The reason of salting is to avoid using rainbow tables (sorry guys this is the only reason) because it speeds up (shortcuts) the "actual" processing power.<br />(((Longer stored hashes AND longer password increases complexity of cracking NOT adding salt ALONE.)))<br /><br />PHP salting functions returns all the needed information for checking passwords, therfore this information should be treated as constant from farther point of view. It is also a target for rainbow tables (sure: for much-much larger ones).<br /><br />What is the solution?<br />The solution is to store password hash and salt on different places.<br />The implementation is yours. Every two different places will be good enough.<br /><br />Yes, it will make problems for hackers. He/she needs to understand your system. No speed up for password cracking will work for him/her without reimplementing your whole system.<br /><br />This is my two cent.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=faq.passwords&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.passwords.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="faq.php">FAQ</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="faq.general.php" title="General Information">General Information</a>
                        </li>
                                                <li class="">
                            <a href="faq.mailinglist.php" title="Mailing lists">Mailing lists</a>
                        </li>
                                                <li class="">
                            <a href="faq.obtaining.php" title="Obtaining PHP">Obtaining PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.databases.php" title="Database issues">Database issues</a>
                        </li>
                                                <li class="">
                            <a href="faq.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="faq.build.php" title="Build Problems">Build Problems</a>
                        </li>
                                                <li class="">
                            <a href="faq.using.php" title="Using PHP">Using PHP</a>
                        </li>
                                                <li class="current">
                            <a href="faq.passwords.php" title="Password Hashing">Password Hashing</a>
                        </li>
                                                <li class="">
                            <a href="faq.html.php" title="PHP and HTML">PHP and HTML</a>
                        </li>
                                                <li class="">
                            <a href="faq.com.php" title="PHP and COM">PHP and COM</a>
                        </li>
                                                <li class="">
                            <a href="faq.misc.php" title="Miscellaneous Questions">Miscellaneous Questions</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
