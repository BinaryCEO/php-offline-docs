<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mt_srand - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mt-srand.php">
 <link rel="shorturl" href="https://www.php.net/mt-srand">
 <link rel="alternate" href="https://www.php.net/mt-srand" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.random.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mt-rand.php">
 <link rel="next" href="https://www.php.net/manual/en/function.rand.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mt-srand.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mt-srand.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mt-srand.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mt-srand.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mt-srand.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mt-srand.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mt-srand.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mt-srand.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mt-srand.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mt-srand.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mt-srand.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Seeds the Mersenne Twister Random Number Generator" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mt_srand - Manual" />
<meta name="twitter:description" content="Seeds the Mersenne Twister Random Number Generator" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mt_srand - Manual" />
<meta itemprop="description" content="Seeds the Mersenne Twister Random Number Generator" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Seeds the Mersenne Twister Random Number Generator" />

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
        <a href="function.rand.php">
          rand &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mt-rand.php">
          &laquo; mt_rand        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.other.php'>Other Basic Extensions</a></li>      <li><a href='book.random.php'>Random</a></li>      <li><a href='ref.random.php'>Random Functions</a></li>      </ul>
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
            <option value='en/function.mt-srand.php' selected="selected">English</option>
            <option value='de/function.mt-srand.php'>German</option>
            <option value='es/function.mt-srand.php'>Spanish</option>
            <option value='fr/function.mt-srand.php'>French</option>
            <option value='it/function.mt-srand.php'>Italian</option>
            <option value='ja/function.mt-srand.php'>Japanese</option>
            <option value='pt_BR/function.mt-srand.php'>Brazilian Portuguese</option>
            <option value='ru/function.mt-srand.php'>Russian</option>
            <option value='tr/function.mt-srand.php'>Turkish</option>
            <option value='uk/function.mt-srand.php'>Ukrainian</option>
            <option value='zh/function.mt-srand.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mt-srand" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mt_srand</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mt_srand</span> &mdash; <span class="dc-title">Seeds the Mersenne Twister Random Number Generator</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.mt-srand-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mt_srand</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$seed</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Seeds the random number generator with
   <code class="parameter">seed</code> or with a random value
   if no <code class="parameter">seed</code> is given.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">There is no need
to seed the random number generator with <span class="function"><a href="function.srand.php" class="function">srand()</a></span> or
<span class="function"><strong>mt_srand()</strong></span> as this is done automatically.
</span></p></blockquote>
  <div class="caution"><strong class="caution">Caution</strong>
 <p class="para">
  Because the Mt19937 (“Mersenne Twister”) engine accepts only a single 32 bit integer as the
  seed, the number of possible random sequences is limited to just 2<sup class="superscript">32</sup>
  (i.e. 4,294,967,296), despite Mt19937’s huge period of 2<sup class="superscript">19937</sup>-1.
 </p>
 <p class="para">
  When relying on either implicit or explicit random seeding, duplications will appear
  much earlier. Duplicated seeds are expected with 50% probability after less than
  80,000 randomly generated seeds according to the birthday problem. A 10% probability
  of a duplicated seed happens after randomly generating roughly 30,000 seeds.
 </p>
 <p class="para">
  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with
  more than a negligible probability. If reproducible seeding is required, both the
  <span class="classname"><a href="class.random-engine-xoshiro256starstar.php" class="classname">Random\Engine\Xoshiro256StarStar</a></span> and <span class="classname"><a href="class.random-engine-pcgoneseq128xslrr64.php" class="classname">Random\Engine\PcgOneseq128XslRr64</a></span>
  engines support much larger seeds that are unlikely to collide randomly. If reproducibility
  is not required, the <span class="classname"><a href="class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> engine provides cryptographically
  secure randomness.
 </p>
</div>

 </div>

 <div class="refsect1 parameters" id="refsect1-function.mt-srand-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">seed</code></dt>
     <dd>
      <p class="para">
       Fills the state with values generated with a linear congruential generator
       that was seeded with <code class="parameter">seed</code> interpreted as an unsigned
       32 bit integer.
      </p>
      <p class="para">
       If <code class="parameter">seed</code> is omitted or <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong>, a random unsigned
       32-bit integer will be used.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       Use one of the following constants to specify the implementation of the algorithm to use.
       <ul class="simplelist">
        <li>
         <strong><code><a href="random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></code></strong>:
         The correct Mt19937 implementation, available as of PHP 7.1.0.
        </li>
        <li>
         <strong><code><a href="random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></code></strong>
         Uses an incorrect Mersenne Twister implementation which was used as the default up till PHP 7.1.0.
         This mode is available for backward compatibility.
        </li>
       </ul>
      </p>
      <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This feature has been
<em>DEPRECATED</em> as of PHP 8.3.0. Relying on this feature
is highly discouraged.</p></div>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mt-srand-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.mt-srand-changelog">
  <h3 class="title">Changelog</h3>
  <p class="para">
   <table class="doctable informaltable">
    
     <thead>
      <tr>
       <th>Version</th>
       <th>Description</th>
      </tr>

     </thead>

     <tbody class="tbody">
      <tr>
       <td>8.3.0</td>
       <td>
        <code class="parameter">seed</code> is now nullable.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        <span class="function"><a href="function.srand.php" class="function">srand()</a></span> <a href="migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">has been made</a> an alias of <span class="function"><strong>mt_srand()</strong></span>.
       </td>
      </tr>

      <tr>
       <td>7.1.0</td>
       <td>
        <span class="function"><a href="function.mt-rand.php" class="function">mt_rand()</a></span> <a href="migration71.incompatible.php#migration71.incompatible.fixes-to-mt_rand-algorithm" class="link">has been updated</a> to use the fixed, correct, version of
         the Mersenne Twister algorithm. To fall back to the old behaviour, use <span class="function"><strong>mt_srand()</strong></span> with <strong><code><a href="random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></code></strong> as the second parameter.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.mt-srand-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mt-rand.php" class="function" rel="rdfs-seeAlso">mt_rand()</a> - Generate a random value via the Mersenne Twister Random Number Generator</span></li>
    <li><span class="function"><a href="function.mt-getrandmax.php" class="function" rel="rdfs-seeAlso">mt_getrandmax()</a> - Show largest possible random value</span></li>
    <li><span class="function"><a href="function.srand.php" class="function" rel="rdfs-seeAlso">srand()</a> - Seed the random number generator</span></li>
   </ul>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/random/functions/mt-srand.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mt-srand%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mt-srand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mt-srand.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79301">  <div class="votes">
    <div id="Vu79301">
    <a href="/manual/vote-note.php?id=79301&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79301">
    <a href="/manual/vote-note.php?id=79301&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79301" title="87% like this...">
    6
    </div>
  </div>
  <a href="#79301" class="name">
  <strong class="user"><em>Alderin1 at gmail dot com</em></strong></a><a class="genanchor" href="#79301"> &para;</a><div class="date" title="2007-11-19 10:55"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79301">
<div class="phpcode"><code><span class="html">I think Joe was a little confused by the wording.  The note meant that implementations of mt_rand() before the change would generate a different set of pseudorandom numbers than would implementations of mt_rand() after the change for the same seed.<br /><br />That's how it reads for me, anyway.</span></code></div>
  </div>
 </div>
  <div class="note" id="73934">  <div class="votes">
    <div id="Vu73934">
    <a href="/manual/vote-note.php?id=73934&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73934">
    <a href="/manual/vote-note.php?id=73934&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73934" title="62% like this...">
    9
    </div>
  </div>
  <a href="#73934" class="name">
  <strong class="user"><em>slonmron_no_spam_please_ at yahoo dot com</em></strong></a><a class="genanchor" href="#73934"> &para;</a><div class="date" title="2007-03-15 11:44"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73934">
<div class="phpcode"><code><span class="html">Looks like mt_rand() gives same result for different seeds when the lowest bits are different only. Try this:<br /><br />#!/usr/bin/php -q<br /><span class="default">&lt;?php<br /><br />$min </span><span class="keyword">= -</span><span class="default">17</span><span class="keyword">;<br /></span><span class="default">$max </span><span class="keyword">= </span><span class="default">$min </span><span class="keyword">+ </span><span class="default">48</span><span class="keyword">; </span><span class="comment">// 48 is to fit the results in my console<br /><br /></span><span class="keyword">for (</span><span class="default">$testseed</span><span class="keyword">=</span><span class="default">$min</span><span class="keyword">; </span><span class="default">$testseed</span><span class="keyword">&lt;</span><span class="default">$max</span><span class="keyword">; </span><span class="default">$testseed</span><span class="keyword">++)<br />{<br />    </span><span class="default">mt_srand</span><span class="keyword">( </span><span class="default">$testseed </span><span class="keyword">);<br />    </span><span class="default">$r </span><span class="keyword">= </span><span class="default">mt_rand</span><span class="keyword">();<br />    </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"mt_srand( 0x%08x ): mt_rand() == 0x%08x == %d\n"</span><span class="keyword">, </span><span class="default">$testseed</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">, </span><span class="default">$r</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />This is a snapshop of the results:<br />...<br />mt_srand( 0xfffffffc ): mt_rand() == 0x0a223d97 == 170016151<br />mt_srand( 0xfffffffd ): mt_rand() == 0x0a223d97 == 170016151<br />mt_srand( 0xfffffffe ): mt_rand() == 0x350a9509 == 889885961<br />mt_srand( 0xffffffff ): mt_rand() == 0x350a9509 == 889885961<br />mt_srand( 0x00000000 ): mt_rand() == 0x71228443 == 1898087491<br />mt_srand( 0x00000001 ): mt_rand() == 0x71228443 == 1898087491<br />mt_srand( 0x00000002 ): mt_rand() == 0x4e0a2cdd == 1309289693<br />mt_srand( 0x00000003 ): mt_rand() == 0x4e0a2cdd == 1309289693<br />...<br /><br />I found this occationally. I have no idea if it is a bug or not. In my real life I do not intend to use sequentional seeds. However, probably this may be important for somebody.</span></code></div>
  </div>
 </div>
  <div class="note" id="124720">  <div class="votes">
    <div id="Vu124720">
    <a href="/manual/vote-note.php?id=124720&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124720">
    <a href="/manual/vote-note.php?id=124720&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124720" title="75% like this...">
    4
    </div>
  </div>
  <a href="#124720" class="name">
  <strong class="user"><em>e at juresah dot si</em></strong></a><a class="genanchor" href="#124720"> &para;</a><div class="date" title="2020-02-15 12:30"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124720">
<div class="phpcode"><code><span class="html">Please note that according to:<br /><a href="https://stackoverflow.com/a/11358829/2897386" rel="nofollow" target="_blank">https://stackoverflow.com/a/11358829/2897386</a><br /><br />The seed is automatically initialised with the current timestamp if not provided.<br /><br />This means that your script will produce values of poor random quality if it's always run at a predictable time, for example by crontab. In that case it may be a good idea to initialise it manually from a cryptographically secure source.</span></code></div>
  </div>
 </div>
  <div class="note" id="75763">  <div class="votes">
    <div id="Vu75763">
    <a href="/manual/vote-note.php?id=75763&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75763">
    <a href="/manual/vote-note.php?id=75763&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75763" title="66% like this...">
    1
    </div>
  </div>
  <a href="#75763" class="name">
  <strong class="user"><em>Kapr</em></strong></a><a class="genanchor" href="#75763"> &para;</a><div class="date" title="2007-06-14 10:25"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75763">
<div class="phpcode"><code><span class="html">To slonmron:<br />Seed for random numbers generator should be initialized only once, before calling proper rand function. After that you give pseudorandom sequence by multiple calling rand. Initialization of random seed is used if 1) You have better source of random seed than implemented algorithm or 2) if You need always the same sequence of pseudorandom numbers. Example given by You shows only that first rand result strongly depends on seed, what is by definition. It is not a bug.</span></code></div>
  </div>
 </div>
  <div class="note" id="115149">  <div class="votes">
    <div id="Vu115149">
    <a href="/manual/vote-note.php?id=115149&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115149">
    <a href="/manual/vote-note.php?id=115149&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115149" title="55% like this...">
    1
    </div>
  </div>
  <a href="#115149" class="name">
  <strong class="user"><em>Nibbels / downfight.de</em></strong></a><a class="genanchor" href="#115149"> &para;</a><div class="date" title="2014-06-04 09:53"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115149">
<div class="phpcode"><code><span class="html">If you are new with seeding read my note.<br /><br />I now understood seeding as a start-state of an algorithm. This algorithm generates a series of -following- pseudorandom numbers.<br />If you start generating from the same startvalue twice, you get the same series of random numbers twice in a row.<br /><br />mt_srand(10); //start of your algorithm equals seeding set to 10<br />for($i=0;$i&lt;10;$i++){<br />    echo mt_rand();<br />}<br /><br />echo "&lt;BR&gt;";<br /><br />mt_srand(10); //start of your algorithm equals seeding set back to 10<br />for($i=0;$i&lt;10;$i++){<br />    echo mt_rand();<br />}<br /><br />Output is like:<br />502355954641584702211262118810740890731360749216120791137454651988317865160461082451610903986200<br />&lt;BR&gt;<br />502355954641584702211262118810740890731360749216120791137454651988317865160461082451610903986200<br /><br />My conclusion: Don't preset your seed to the same number all the time if you want "alternating random numbers"<br /><br />Greetings</span></code></div>
  </div>
 </div>
  <div class="note" id="96921">  <div class="votes">
    <div id="Vu96921">
    <a href="/manual/vote-note.php?id=96921&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96921">
    <a href="/manual/vote-note.php?id=96921&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96921" title="50% like this...">
    0
    </div>
  </div>
  <a href="#96921" class="name">
  <strong class="user"><em>dev at 10e12 dot net</em></strong></a><a class="genanchor" href="#96921"> &para;</a><div class="date" title="2010-03-23 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96921">
<div class="phpcode"><code><span class="html">What about this for an example... <br /><br />(sorry for the funky line breaks but I have once<br />more reported the bug on this issue of word <br />wrapping to no avail)<br /><br />Intending to use it in passing a "semi-guaranteed"<br />properly seeded random number to a client, then to <br />capture input from the user which must be encrypted <br />client side before being sent to the server again <br />  a) during the same session and, <br />  b) within a set time limit.<br /><br />for more reading also see:<br />  AES Rijndael enc/dec routines for javaScript<br />  developed and tested by Herbert Hanewinkel, <br />  <a href="http://www.hanewin.net/encrypt/aes/aes.htm" rel="nofollow" target="_blank">http://www.hanewin.net/encrypt/aes/aes.htm</a><br /><br /><span class="default">&lt;?php<br /></span><span class="comment">/*<br />calling the function, prepping the data to send to <br />the client... , who then uses it in a javascript <br />implementation of AES Encrypt.<br />*/<br /><br /></span><span class="keyword">function </span><span class="default">SHA256</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$keyval</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">){<br />    if (</span><span class="default">$keyval</span><span class="keyword">!==</span><span class="string">""</span><span class="keyword">){</span><span class="comment">//not null or empty<br />        </span><span class="default">$sHash </span><span class="keyword">= </span><span class="default">mhash</span><span class="keyword">(</span><span class="default">Constant</span><span class="keyword">(</span><span class="string">'MHASH_SHA256'</span><span class="keyword">),</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$keyval</span><span class="keyword">);<br />    }else{<br />        </span><span class="default">$sHash </span><span class="keyword">= </span><span class="default">mhash</span><span class="keyword">(</span><span class="default">Constant</span><span class="keyword">(</span><span class="string">'MHASH_SHA256'</span><span class="keyword">),</span><span class="default">$str</span><span class="keyword">);<br />    }<br />    </span><span class="comment">// same as Binary 2 Hex conversion<br />    </span><span class="keyword">return </span><span class="default">implode</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'H*'</span><span class="keyword">,</span><span class="default">$sHash</span><span class="keyword">),</span><span class="string">''</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/*---------------------------------------------------<br />Radomizing the random data with fixed data for <br />the user and location If return value maximum <br />is set to zero (0) the function uses mt_getrandmax<br />If both retMin and retMax is zero (0) the function <br />uses mt_rand w.o. limits<br />*----------------------------------------------------*/<br /></span><span class="keyword">function </span><span class="default">local_prgn</span><span class="keyword">(</span><span class="default">$retMin </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$retMax </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">){<br /></span><span class="comment">// first get the session id of the request session<br />  </span><span class="default">$sSrv </span><span class="keyword">= </span><span class="default">session_id</span><span class="keyword">(); <br /><br /></span><span class="comment">// the following is valid only on the current server<br />  </span><span class="default">$sSrv </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_NAME'</span><span class="keyword">].<br />             </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'SERVER_ADDR'</span><span class="keyword">].</span><span class="default">$sSrv</span><span class="keyword">),</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="comment">// the following applies only to the requesting client<br />  </span><span class="default">$sReq </span><span class="keyword">= </span><span class="default">implode</span><span class="keyword">(</span><span class="default">unpack</span><span class="keyword">(</span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REMOTE_ADDR'</span><span class="keyword">].<br />             </span><span class="default">$_SERVER</span><span class="keyword">[</span><span class="string">'REQUEST_TIME'</span><span class="keyword">]),</span><span class="string">''</span><span class="keyword">);<br /><br /></span><span class="comment">// get a SHA256 seed based on the current values<br />  </span><span class="default">$sSeed </span><span class="keyword">= </span><span class="default">SHA256</span><span class="keyword">(</span><span class="default">$sSrv</span><span class="keyword">,</span><span class="default">$sReq</span><span class="keyword">); <br /><br /></span><span class="comment">// get a random value based on the uniqueness of the seed above<br />    </span><span class="default">mt_srand</span><span class="keyword">(</span><span class="default">$sSeed</span><span class="keyword">); </span><span class="comment">// seed the random num gen<br /><br />// some error handling and checking<br />    </span><span class="keyword">if (</span><span class="default">$retMin </span><span class="keyword">&gt; </span><span class="default">$retMax</span><span class="keyword">){ <br />    </span><span class="comment">// swap vars if wrong order<br />        </span><span class="default">$rx </span><span class="keyword">= </span><span class="default">$retMax</span><span class="keyword">; </span><span class="default">$retMax </span><span class="keyword">= </span><span class="default">$retMin</span><span class="keyword">; </span><span class="default">$retMin </span><span class="keyword">= </span><span class="default">$rx</span><span class="keyword">; <br /><br />    } else if (</span><span class="default">$retMin </span><span class="keyword">== </span><span class="default">$retMax</span><span class="keyword">){<br />    </span><span class="comment">//meaningless range, not very random<br />    //ensure for next check in this range<br />        </span><span class="default">$retMin </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$retMax </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    }<br /></span><span class="comment">// select what we need to return<br />    </span><span class="keyword">if (((</span><span class="default">$retMax </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)&amp;&amp;(</span><span class="default">$retMax </span><span class="keyword">= </span><span class="default">mt_getrandmax</span><span class="keyword">))||<br />(</span><span class="default">$retMin</span><span class="keyword">==</span><span class="default">$retMax</span><span class="keyword">)){<br />        return </span><span class="default">mt_getrandmax</span><span class="keyword">();<br />    }else{<br />        return </span><span class="default">mt_getrandmax</span><span class="keyword">(</span><span class="default">$retMin</span><span class="keyword">,</span><span class="default">$retMax</span><span class="keyword">);<br />    }<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59266">  <div class="votes">
    <div id="Vu59266">
    <a href="/manual/vote-note.php?id=59266&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59266">
    <a href="/manual/vote-note.php?id=59266&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59266" title="50% like this...">
    0
    </div>
  </div>
  <a href="#59266" class="name">
  <strong class="user"><em>vbassassin at coderheaven dot com</em></strong></a><a class="genanchor" href="#59266"> &para;</a><div class="date" title="2005-11-30 08:57"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59266">
<div class="phpcode"><code><span class="html">"Better still: Use a 31-bit hash of microtime() as the seed. "<br /><br />Correct me if i am wrong, but woudlnt using microtime() still limit the total seeds to 1,000,000 again? Since the 31-bit hash will always give the same hash for the same number, and in the microtime() function you could have 1,000,000 or less numbers. So in effect your still no better off at all :-p<br /><br />Best regards,<br />scott<br /><br />PS: I actually agree that PHP has pretty much resolved the issue and got as close as anyones going to get to solving the seeding issue by introducing the "Mersenne Twister" algorithm which creates a much larger pool than 1,000,000 numbers. Just because the mt_srand() function exists doesnt mean you HAVE to use it ;-) use it if you NEED a specific list of the same numbers (comes in handy for encryptions with passwords ;-)</span></code></div>
  </div>
 </div>
  <div class="note" id="29565">  <div class="votes">
    <div id="Vu29565">
    <a href="/manual/vote-note.php?id=29565&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd29565">
    <a href="/manual/vote-note.php?id=29565&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V29565" title="50% like this...">
    0
    </div>
  </div>
  <a href="#29565" class="name">
  <strong class="user"><em>mrcheezy at hotmail dot com</em></strong></a><a class="genanchor" href="#29565"> &para;</a><div class="date" title="2003-02-17 02:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom29565">
<div class="phpcode"><code><span class="html">Very good points above on seeds, thank you. If you would like to test a seed try using the code below. It will take between 5 and 20 seconds depending on your system and then will spit out the number of reused keys out of 100,000 attempts.<br /><br />;  for ($i=0; $i&lt;100000; $i++) {<br />;    mt_srand(hexdec(substr(md5(microtime()), -8)) &amp; 0x7fffffff);<br />;    $rand = mt_rand();<br />;<br />;    ($arr[$rand] == '1') ? $k++ : $arr[$rand] = '1';<br />;  }</span></code></div>
  </div>
 </div>
  <div class="note" id="22323">  <div class="votes">
    <div id="Vu22323">
    <a href="/manual/vote-note.php?id=22323&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22323">
    <a href="/manual/vote-note.php?id=22323&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22323" title="50% like this...">
    0
    </div>
  </div>
  <a href="#22323" class="name">
  <strong class="user"><em>maxim at php dot net</em></strong></a><a class="genanchor" href="#22323"> &para;</a><div class="date" title="2002-06-13 02:57"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22323">
<div class="phpcode"><code><span class="html">to : l_rossato@libero.it<br /><br />doing ...<br /><br />list($usec,$sec)=explode(" ",microtime());<br />$unique = mt_srand($sec * $usec);<br /><br />theoretiaclly, makes just as much sense as <br /><br />list($usec,$sec)=explode(" ",microtime());<br />$unique = $usec + 0;<br /><br />Once every while, depending on the microsecond resolution of your computer, the millisecond value will be a zero (0), and as I hope you know, in mathematics, any number multiplied by a zero becomes a zero itself.<br /><br />(x * 0 = 0)<br /><br />In real life, on a good machine, with a resolution to 1 million miliseconds per each second (i.e: Win2k server), you will be reduplicating your unique ID each million's ID issued. This means if you use it as your cookie encryption algorithm or a visitor ID, you will not exceed some million instances.<br /><br />Futhermore, if that would be for a software development that you re-distribuite, installed on some weird old PC, where resolution can be as small as 100 milliseconds per second - a code with this uniqueness algorithm just wouldn't last any long.<br /><br />Good Luck,<br /><br />Maxim Maletsky<br />maxim@php.net<br /><br />PHPBeginner.com</span></code></div>
  </div>
 </div>
  <div class="note" id="19244">  <div class="votes">
    <div id="Vu19244">
    <a href="/manual/vote-note.php?id=19244&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19244">
    <a href="/manual/vote-note.php?id=19244&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19244" title="50% like this...">
    0
    </div>
  </div>
  <a href="#19244" class="name">
  <strong class="user"><em>changminyang at hananet dot net</em></strong></a><a class="genanchor" href="#19244"> &para;</a><div class="date" title="2002-02-20 02:00"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19244">
<div class="phpcode"><code><span class="html">list($usec,$sec) = explode(" ",microtime());<br /><br />/* Test: Each get rand sequence are 10time. */<br />/* ex) 5.3point meaning 5point integer + 3point decimal */<br /><br />// case A:<br />// 5.0point - 1time<br />// 6.0point - 9time<br />$rand = (double)microtime()*1000000;<br /><br />// case B:<br />// 8.6point - 1time<br />// 9.4point - 1time<br />// 9.5point - 7time<br />// 10.3point - 1time<br />$rand = (double)$sec * $usec;<br /><br />// My case A:<br />// 8.0point - 10time<br />$rand = explode(".",$usec * $sec);<br />$rand = (double)substr($rand[0]*$rand[1],0,8);<br /><br />// My case B:<br />// 9.0point - 9time<br />// 10.0point - 1time<br />$rand = explode(".",$usec * $sec);<br />$rand = $rand[0] + $rand[1];<br /><br />mt_srand($rand);<br />srand($rand);<br /><br />// P.S&gt; My previous note is has wrong lines, sorry about it.  This is right.</span></code></div>
  </div>
 </div>
  <div class="note" id="96922">  <div class="votes">
    <div id="Vu96922">
    <a href="/manual/vote-note.php?id=96922&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96922">
    <a href="/manual/vote-note.php?id=96922&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96922" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#96922" class="name">
  <strong class="user"><em>dev at 10e12 dot net</em></strong></a><a class="genanchor" href="#96922"> &para;</a><div class="date" title="2010-03-23 04:44"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96922">
<div class="phpcode"><code><span class="html">Sorry for the error in the previous...<br />Due to the glitch with the wordwrap I got annoyed and lost focus on the copy and paste move.<br /><br />The last part of the actual function should read.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// select what we need to return<br />    </span><span class="keyword">if (((</span><span class="default">$retMax </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">)&amp;&amp;(</span><span class="default">$retMax </span><span class="keyword">= </span><span class="default">mt_getrandmax</span><span class="keyword">))||<br />(</span><span class="default">$retMin</span><span class="keyword">==</span><span class="default">$retMax</span><span class="keyword">)){<br />        return </span><span class="default">mt_rand</span><span class="keyword">();<br />    }else{<br />        return </span><span class="default">mt_rand</span><span class="keyword">(</span><span class="default">$retMin</span><span class="keyword">,</span><span class="default">$retMax</span><span class="keyword">);<br />    }<br /><br /></span><span class="default">?&gt;<br /></span><br />And Nothing else of course...</span></code></div>
  </div>
 </div>
  <div class="note" id="113978">  <div class="votes">
    <div id="Vu113978">
    <a href="/manual/vote-note.php?id=113978&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113978">
    <a href="/manual/vote-note.php?id=113978&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113978" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#113978" class="name">
  <strong class="user"><em>php dot net-comment at lucb1e dot com</em></strong></a><a class="genanchor" href="#113978"> &para;</a><div class="date" title="2013-12-25 12:20"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113978">
<div class="phpcode"><code><span class="html">@  fasaxc at yahoo dot com:<br /><br />If you want truly random numbers, use a truly random source. Your system is rather unwieldy when you can simply call openssl_random_pseudo_bytes() for good randomness. Don't use microtime as a source of randomness.</span></code></div>
  </div>
 </div>
  <div class="note" id="34186">  <div class="votes">
    <div id="Vu34186">
    <a href="/manual/vote-note.php?id=34186&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34186">
    <a href="/manual/vote-note.php?id=34186&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34186" title="44% like this...">
    -1
    </div>
  </div>
  <a href="#34186" class="name">
  <strong class="user"><em>fasaxc at yahoo dot com</em></strong></a><a class="genanchor" href="#34186"> &para;</a><div class="date" title="2003-07-17 04:14"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34186">
<div class="phpcode"><code><span class="html">The best way to ensure a random seed is to do the following:<br />To start:<br />   1) get your initial seed with mt_srand(microtime() * 1000000)<br />   2) generate a random no. $random=mt_rand()<br />   3) save this number in a file (or database or whatever so that it is available next time the page is loaded)<br /><br /> Now, for each time your script is loaded :<br />   1) load the value you saved above and do $new_seed=($random+(microtime() * 1000000))%pow(2,32)<br />   2) mt_srand($new_seed);<br />   3) generate a new random no. $random=mt_rand()<br />   4) save that number back in the file/database<br /><br />This procedure takes advantage not only of the randomness of microtime() but of all the previous calls to microtime() so your seed becomes better and better with time. It also generates good seeds even on platforms where microtime() doesn't take all the values it can.<br /><br />Just using microtime() * 1000000 only results in 1000000 possible seeds (and less on some platforms as noted) - the function above gives 2^32 seeds with an avelanche effect accross multiple executions.</span></code></div>
  </div>
 </div>
  <div class="note" id="106288">  <div class="votes">
    <div id="Vu106288">
    <a href="/manual/vote-note.php?id=106288&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106288">
    <a href="/manual/vote-note.php?id=106288&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106288" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#106288" class="name">
  <strong class="user"><em>josh at joshstrike dot com</em></strong></a><a class="genanchor" href="#106288"> &para;</a><div class="date" title="2011-10-25 06:29"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106288">
<div class="phpcode"><code><span class="html">mt_srand effectively performs a modulo % 2147483648 on positive integers over 32 bits, but with negative integers it instead adds 2147483648 to the value it gets.<br /><br />Seeds with equal results:<br />2147483649 == 1<br />2147483648 == 0<br />2147483647 == -1 <br />-2147483646 == 2<br />-2147483647 == 1<br />-2147483648 == 0<br /><br />Importantly though, seeding with anything less than -2147483648 will always yield the same result as seeding with zero.</span></code></div>
  </div>
 </div>
  <div class="note" id="34383">  <div class="votes">
    <div id="Vu34383">
    <a href="/manual/vote-note.php?id=34383&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd34383">
    <a href="/manual/vote-note.php?id=34383&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V34383" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#34383" class="name">
  <strong class="user"><em>fasaxc at yahoo dot co dot uk</em></strong></a><a class="genanchor" href="#34383"> &para;</a><div class="date" title="2003-07-25 08:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom34383">
<div class="phpcode"><code><span class="html">In fact, here's an even better function than the one below assuming your install provides a random entropy daemon and you're running *nix (to check for the former type "head -c 6 /dev/urandom" on the command line if available - if you get 6 random characters you're set). N.B. php must be able to find the head program so it must be in your path and allowed if you're running safe mode.<br /><br />The functions db_set_global() and db_get_global() I use to set/get a variable from a central database but you could save/restore the variable from a file instead or just use the function get_random_word().<br /><br />&lt;?<br /><br />####################################<br />## returns a random 32bit integer.<br />## Passing a parameter of True gives a better random<br />## number but relies on the /dev/random device<br />## which can block for a long time while it gathers<br />## enough random data ie. DONT USE IT unless<br />##   a) You have an entropy generator attatched to<br />## your computer set to /dev/random -OR-<br />##   b) Your script is running locally and generating<br />## a good random number is very important<br />####################################<br />function get_random_word($force_random=False) {<br />    if ($force_random) {<br />        $u='';<br />    } else {<br />        $u='u';<br />    }<br />    $ran_string=shell_exec("head -c 4 /dev/{$u}random");<br />    $random=ord(substr($ran_string,0,1))&lt;&lt;24 |<br />            ord(substr($ran_string,1,1))&lt;&lt;16 |<br />            ord(substr($ran_string,2,1))&lt;&lt;8 |<br />            ord(substr($ran_string,3,1));<br />    return $random;<br />}<br /><br />--EITHER - IF YOU'VE SET UP A DATABASE OF GLOBAL VARIABLES--<br /><br />## If the seed is found in the database<br />if ($seed=db_get_global('seed')) {<br />    # use mt_rand() to get the next seed<br />    mt_srand($seed);<br />    # then XOR that with a random word<br />    $seed=(mt_rand() ^ get_random_word());<br />} else {<br />## Make a completely new seed (First Run)<br />    # Generate the seed as a proper random no using /dev/random<br />    $seed=get_random_word(True);<br />    mt_srand($seed);<br />}<br /><br />db_set_global('seed',$seed);<br /><br />--OR JUST--<br />mt_srand(get_random_word());<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="97322">  <div class="votes">
    <div id="Vu97322">
    <a href="/manual/vote-note.php?id=97322&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97322">
    <a href="/manual/vote-note.php?id=97322&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97322" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#97322" class="name">
  <strong class="user"><em>limo at anime42 dot com</em></strong></a><a class="genanchor" href="#97322"> &para;</a><div class="date" title="2010-04-14 07:33"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97322">
<div class="phpcode"><code><span class="html">I have spent the last couple of hours trying to track down a bug which affects mt_rand/rand and mt_srand/mt_rand.<br /><br />OS is Debian 5.0.4 "Lenny".<br />PHP version is 5.3.2-0.dotdeb.1 with Suhosin-Patch (cli) (built: Mar  9 2010 11:42:01).<br /><br />I have tried to fix the issue by appending the following lines into the .htaccess / apache2 main config file:<br /><br />        php_value suhosin.mt_srand.ignore Off<br />        php_value suhosin.srand.ignore Off<br /><br />This has helped a bit, stabilizing the beggining of the pseudo random number sequence, but the generator still fails after a fair number of iterations (roughly around 1K~3K.<br /><br />*** Removing the Suhosin extension has resolved this issue, I am waiting for an official extension build that will work with 5.3.x so that I can reattach it into the php configuration. ***<br /><br />Here is the code which ought to replicate the problem:<br /><br />    $len = 100000;<br />    $min = 0;<br />    $max = 99;<br /><br />    $t = (int)(microtime(true)*0xFFFF);<br /><br />    $a = array();<br />    srand( $t );<br /><br />    for ( $i = 0; $i &lt; $len; $i ++ )<br />        $a[$i] = rand( $min, $max );<br /><br />    $b = array();<br />    srand( $t );<br /><br />    for ( $i = 0; $i &lt; $len; $i ++ )<br />        $b[$i] = rand( $min, $max );<br /><br />    for ( $i = 0; $i &lt; $len; $i ++ )<br />        if ( $a[$i] !== $b[$i] )<br />            die( 'Pseudo-random sequence borked at #'.$i.'th iteration!');<br /><br />    echo 'Your pseudo-random sequencer is working correctly.';<br />    exit( 0 );</span></code></div>
  </div>
 </div>
  <div class="note" id="113980">  <div class="votes">
    <div id="Vu113980">
    <a href="/manual/vote-note.php?id=113980&amp;page=function.mt-srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113980">
    <a href="/manual/vote-note.php?id=113980&amp;page=function.mt-srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113980" title="14% like this...">
    -5
    </div>
  </div>
  <a href="#113980" class="name">
  <strong class="user"><em>simon at labs dot coop</em></strong></a><a class="genanchor" href="#113980"> &para;</a><div class="date" title="2013-12-25 09:19"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113980">
<div class="phpcode"><code><span class="html">I can’t stress how important it is to seed your randomisation process in code! better still something we found in the BBS Days was if we didn’t seed from a token from outside our systems abstraction layer we would go in circles and so would our users. Here at chronolabs we offer a feed of randomly changing token on each impression, it also randomly displays a different number of them this is from <a href="http://seed.feeds.labs.coop" rel="nofollow" target="_blank">http://seed.feeds.labs.coop</a> in the example below I use DOM to load the XML, Extract the randomisation tokens and then with mt_srand and srand seed the random selecting processes! The following function when you call it will seed your random selection process in both the old and new random selection routines all you need to do is call the function! This will work with any version of PHP 5 and any earlier with DOM Objectivity.<br /><br />function makeRandomSeeded() {<br />    $file = '<a href="http://seed.feeds.labs.coop/" rel="nofollow" target="_blank">http://seed.feeds.labs.coop/</a>';<br />    $doc = new DOMDocument();<br />    $doc-&gt;loadHTMLFile($file);<br />    $skip = array('This feed can', 'Current mode is');<br />    $elements = $doc-&gt;getElementsByTagName('description');<br />    foreach($elements as $element) {<br />        $seed = $element-&gt;nodeValue;<br />        $found = false;<br />        foreach($skip as $find) {<br />            if (substr($seed, 0, strlen($find))==$find) {<br />                $found = true;<br />            }<br />        }<br />        if ($found==false)<br />            $seeds[] = $seed;<br />    }<br />    shuffle($seeds);<br />    mt_srand($seeds[mt_rand(0, count($seeds)-1)]);<br />    srand($seeds[mt_rand(0, count($seeds)-1)]);<br />}<br /><br />Remember when PHP says an integer this also include any character of the Ascii chart if you would like to see an example of this do the following:<br /><br /><span class="default">&lt;?php<br />   $a </span><span class="keyword">= </span><span class="string">"000A"</span><span class="keyword">;<br />   while(</span><span class="default">$a</span><span class="keyword">!=</span><span class="string">"001B"</span><span class="keyword">) {<br />      echo </span><span class="default">$a</span><span class="keyword">;<br />      </span><span class="default">$a</span><span class="keyword">++;<br />   }<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mt-srand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mt-srand.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.random.php">Random Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.getrandmax.php" title="getrandmax">getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-getrandmax.php" title="mt_&#8203;getrandmax">mt_&#8203;getrandmax</a>
                        </li>
                                                <li class="">
                            <a href="function.mt-rand.php" title="mt_&#8203;rand">mt_&#8203;rand</a>
                        </li>
                                                <li class="current">
                            <a href="function.mt-srand.php" title="mt_&#8203;srand">mt_&#8203;srand</a>
                        </li>
                                                <li class="">
                            <a href="function.rand.php" title="rand">rand</a>
                        </li>
                                                <li class="">
                            <a href="function.random-bytes.php" title="random_&#8203;bytes">random_&#8203;bytes</a>
                        </li>
                                                <li class="">
                            <a href="function.random-int.php" title="random_&#8203;int">random_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.srand.php" title="srand">srand</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.lcg-value.php" title="lcg_&#8203;value">lcg_&#8203;value</a>
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
