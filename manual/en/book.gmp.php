<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: GMP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/book.gmp.php">
 <link rel="shorturl" href="https://www.php.net/gmp">
 <link rel="alternate" href="https://www.php.net/gmp" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/refs.math.php">
 <link rel="prev" href="https://www.php.net/manual/en/bcmath-number.unserialize.php">
 <link rel="next" href="https://www.php.net/manual/en/intro.gmp.php">

 <link rel="alternate" href="https://www.php.net/manual/en/book.gmp.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/book.gmp.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/book.gmp.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/book.gmp.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/book.gmp.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/book.gmp.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/book.gmp.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/book.gmp.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/book.gmp.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/book.gmp.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/book.gmp.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="GNU Multiple Precision" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: GMP - Manual" />
<meta name="twitter:description" content="GNU Multiple Precision" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: GMP - Manual" />
<meta itemprop="description" content="GNU Multiple Precision" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="GNU Multiple Precision" />

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
        <a href="intro.gmp.php">
          Introduction &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="bcmath-number.unserialize.php">
          &laquo; BcMath\Number::__unserialize        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.math.php'>Mathematical Extensions</a></li>      </ul>
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
            <option value='en/book.gmp.php' selected="selected">English</option>
            <option value='de/book.gmp.php'>German</option>
            <option value='es/book.gmp.php'>Spanish</option>
            <option value='fr/book.gmp.php'>French</option>
            <option value='it/book.gmp.php'>Italian</option>
            <option value='ja/book.gmp.php'>Japanese</option>
            <option value='pt_BR/book.gmp.php'>Brazilian Portuguese</option>
            <option value='ru/book.gmp.php'>Russian</option>
            <option value='tr/book.gmp.php'>Turkish</option>
            <option value='uk/book.gmp.php'>Ukrainian</option>
            <option value='zh/book.gmp.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="book.gmp" class="book">
 
 <h1 class="title">GNU Multiple Precision</h1>
 
 
 
 
 
 
 







 




 





 







 





<ul class="chunklist chunklist_book"><li><a href="intro.gmp.php">Introduction</a></li><li><a href="gmp.setup.php">Installing/Configuring</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="gmp.requirements.php">Requirements</a></li><li><a href="gmp.installation.php">Installation</a></li></ul></li><li><a href="gmp.constants.php">Predefined Constants</a></li><li><a href="gmp.examples.php">Examples</a></li><li><a href="ref.gmp.php">GMP Functions</a><ul class="chunklist chunklist_book chunklist_children"><li><a href="function.gmp-abs.php">gmp_abs</a> — Absolute value</li><li><a href="function.gmp-add.php">gmp_add</a> — Add numbers</li><li><a href="function.gmp-and.php">gmp_and</a> — Bitwise AND</li><li><a href="function.gmp-binomial.php">gmp_binomial</a> — Calculates binomial coefficient</li><li><a href="function.gmp-clrbit.php">gmp_clrbit</a> — Clear bit</li><li><a href="function.gmp-cmp.php">gmp_cmp</a> — Compare numbers</li><li><a href="function.gmp-com.php">gmp_com</a> — Calculates one's complement</li><li><a href="function.gmp-div.php">gmp_div</a> — Alias of gmp_div_q</li><li><a href="function.gmp-div-q.php">gmp_div_q</a> — Divide numbers</li><li><a href="function.gmp-div-qr.php">gmp_div_qr</a> — Divide numbers and get quotient and remainder</li><li><a href="function.gmp-div-r.php">gmp_div_r</a> — Remainder of the division of numbers</li><li><a href="function.gmp-divexact.php">gmp_divexact</a> — Exact division of numbers</li><li><a href="function.gmp-export.php">gmp_export</a> — Export to a binary string</li><li><a href="function.gmp-fact.php">gmp_fact</a> — Factorial</li><li><a href="function.gmp-gcd.php">gmp_gcd</a> — Calculate GCD</li><li><a href="function.gmp-gcdext.php">gmp_gcdext</a> — Calculate GCD and multipliers</li><li><a href="function.gmp-hamdist.php">gmp_hamdist</a> — Hamming distance</li><li><a href="function.gmp-import.php">gmp_import</a> — Import from a binary string</li><li><a href="function.gmp-init.php">gmp_init</a> — Create GMP number</li><li><a href="function.gmp-intval.php">gmp_intval</a> — Convert GMP number to integer</li><li><a href="function.gmp-invert.php">gmp_invert</a> — Inverse by modulo</li><li><a href="function.gmp-jacobi.php">gmp_jacobi</a> — Jacobi symbol</li><li><a href="function.gmp-kronecker.php">gmp_kronecker</a> — Kronecker symbol</li><li><a href="function.gmp-lcm.php">gmp_lcm</a> — Calculate LCM</li><li><a href="function.gmp-legendre.php">gmp_legendre</a> — Legendre symbol</li><li><a href="function.gmp-mod.php">gmp_mod</a> — Modulo operation</li><li><a href="function.gmp-mul.php">gmp_mul</a> — Multiply numbers</li><li><a href="function.gmp-neg.php">gmp_neg</a> — Negate number</li><li><a href="function.gmp-nextprime.php">gmp_nextprime</a> — Find next prime number</li><li><a href="function.gmp-or.php">gmp_or</a> — Bitwise OR</li><li><a href="function.gmp-perfect-power.php">gmp_perfect_power</a> — Perfect power check</li><li><a href="function.gmp-perfect-square.php">gmp_perfect_square</a> — Perfect square check</li><li><a href="function.gmp-popcount.php">gmp_popcount</a> — Population count</li><li><a href="function.gmp-pow.php">gmp_pow</a> — Raise number into power</li><li><a href="function.gmp-powm.php">gmp_powm</a> — Raise number into power with modulo</li><li><a href="function.gmp-prob-prime.php">gmp_prob_prime</a> — Check if number is &quot;probably prime&quot;</li><li><a href="function.gmp-random.php">gmp_random</a> — Random number</li><li><a href="function.gmp-random-bits.php">gmp_random_bits</a> — Random number</li><li><a href="function.gmp-random-range.php">gmp_random_range</a> — Get a uniformly selected integer</li><li><a href="function.gmp-random-seed.php">gmp_random_seed</a> — Sets the RNG seed</li><li><a href="function.gmp-root.php">gmp_root</a> — Take the integer part of nth root</li><li><a href="function.gmp-rootrem.php">gmp_rootrem</a> — Take the integer part and remainder of nth root</li><li><a href="function.gmp-scan0.php">gmp_scan0</a> — Scan for 0</li><li><a href="function.gmp-scan1.php">gmp_scan1</a> — Scan for 1</li><li><a href="function.gmp-setbit.php">gmp_setbit</a> — Set bit</li><li><a href="function.gmp-sign.php">gmp_sign</a> — Sign of number</li><li><a href="function.gmp-sqrt.php">gmp_sqrt</a> — Calculate square root</li><li><a href="function.gmp-sqrtrem.php">gmp_sqrtrem</a> — Square root with remainder</li><li><a href="function.gmp-strval.php">gmp_strval</a> — Convert GMP number to string</li><li><a href="function.gmp-sub.php">gmp_sub</a> — Subtract numbers</li><li><a href="function.gmp-testbit.php">gmp_testbit</a> — Tests if a bit is set</li><li><a href="function.gmp-xor.php">gmp_xor</a> — Bitwise XOR</li></ul></li><li><a href="class.gmp.php">GMP</a> — The GMP class<ul class="chunklist chunklist_book chunklist_children"><li><a href="gmp.construct.php">GMP::__construct</a> — Create GMP number</li><li><a href="gmp.serialize.php">GMP::__serialize</a> — Serializes the GMP object</li><li><a href="gmp.unserialize.php">GMP::__unserialize</a> — Deserializes the data parameter into a GMP object</li></ul></li></ul></div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/gmp/book.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fbook.gmp%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=book.gmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gmp.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="106521">  <div class="votes">
    <div id="Vu106521">
    <a href="/manual/vote-note.php?id=106521&amp;page=book.gmp&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106521">
    <a href="/manual/vote-note.php?id=106521&amp;page=book.gmp&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106521" title="56% like this...">
    18
    </div>
  </div>
  <a href="#106521" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#106521"> &para;</a><div class="date" title="2011-11-15 05:38"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106521">
<div class="phpcode"><code><span class="html">Be careful with GMP - it considers leading zeros in a number string as meaning the number is in octal, whereas 'bc' doesn't:<br /><br />  gmp_strval("000100", 10) =&gt; 64<br /><br />  bcmul("000100", "1") =&gt; 100</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=book.gmp&amp;repo=en&amp;redirect=https://www.php.net/manual/en/book.gmp.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="refs.math.php">Mathematical Extensions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="book.bc.php" title="BC Math">BC Math</a>
                        </li>
                                                <li class="current">
                            <a href="book.gmp.php" title="GMP">GMP</a>
                        </li>
                                                <li class="">
                            <a href="book.math.php" title="Math">Math</a>
                        </li>
                                                <li class="">
                            <a href="book.stats.php" title="Statistics">Statistics</a>
                        </li>
                                                <li class="">
                            <a href="book.trader.php" title="Trader">Trader</a>
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
