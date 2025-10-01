<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: srand - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.srand.php">
 <link rel="shorturl" href="https://www.php.net/srand">
 <link rel="alternate" href="https://www.php.net/srand" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.random.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.random-int.php">
 <link rel="next" href="https://www.php.net/manual/en/class.random-randomizer.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.srand.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.srand.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.srand.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.srand.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.srand.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.srand.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.srand.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.srand.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.srand.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.srand.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.srand.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Seed the random number generator" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: srand - Manual" />
<meta name="twitter:description" content="Seed the random number generator" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: srand - Manual" />
<meta itemprop="description" content="Seed the random number generator" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Seed the random number generator" />

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
        <a href="class.random-randomizer.php">
          Random\Randomizer &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.random-int.php">
          &laquo; random_int        </a>
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
            <option value='en/function.srand.php' selected="selected">English</option>
            <option value='de/function.srand.php'>German</option>
            <option value='es/function.srand.php'>Spanish</option>
            <option value='fr/function.srand.php'>French</option>
            <option value='it/function.srand.php'>Italian</option>
            <option value='ja/function.srand.php'>Japanese</option>
            <option value='pt_BR/function.srand.php'>Brazilian Portuguese</option>
            <option value='ru/function.srand.php'>Russian</option>
            <option value='tr/function.srand.php'>Turkish</option>
            <option value='uk/function.srand.php'>Ukrainian</option>
            <option value='zh/function.srand.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.srand" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">srand</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">srand</span> &mdash; <span class="dc-title">Seed the random number generator</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.srand-description">
  <h3 class="title">Description</h3>
   <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>srand</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.integer.php" class="type int">int</a></span></span> <code class="parameter">$seed</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = <strong><code><a href="random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></code></strong></span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <p class="para rdfs-comment">
   Seeds the random number generator with
   <code class="parameter">seed</code> or with a random value
   if no <code class="parameter">seed</code> is given.
  </p>

  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">There is no need
to seed the random number generator with <span class="function"><strong>srand()</strong></span> or
<span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span> as this is done automatically.
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
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">As of PHP 7.1.0, <span class="function"><strong>srand()</strong></span> has been made
   an alias of <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span>.</span>
  </p></blockquote>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.srand-parameters">
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
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.srand-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-function.srand-changelog">
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
        <span class="function"><strong>srand()</strong></span> <a href="migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">has been made</a> an alias of <span class="function"><a href="function.mt-srand.php" class="function">mt_srand()</a></span>.
       </td>
      </tr>

     </tbody>
    
   </table>

  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.srand-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.rand.php" class="function" rel="rdfs-seeAlso">rand()</a> - Generate a random integer</span></li>
    <li><span class="function"><a href="function.getrandmax.php" class="function" rel="rdfs-seeAlso">getrandmax()</a> - Show largest possible random value</span></li>
    <li><span class="function"><a href="function.mt-srand.php" class="function" rel="rdfs-seeAlso">mt_srand()</a> - Seeds the Mersenne Twister Random Number Generator</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/random/functions/srand.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.srand%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.srand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.srand.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">13 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102636">  <div class="votes">
    <div id="Vu102636">
    <a href="/manual/vote-note.php?id=102636&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102636">
    <a href="/manual/vote-note.php?id=102636&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102636" title="70% like this...">
    14
    </div>
  </div>
  <a href="#102636" class="name">
  <strong class="user"><em>Niels Keurentjes</em></strong></a><a class="genanchor" href="#102636"> &para;</a><div class="date" title="2011-02-25 05:22"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102636">
<div class="phpcode"><code><span class="html">Keep in mind that the Suhosin patch which is installed by default on many PHP-installs such as Debian and DirectAdmin completely disables the srand and mt_srand functions for encryption security reasons. To generate reproducible random numbers from a fixed seed on a Suhosin-hardened server you will need to include your own pseudorandom generator code.</span></code></div>
  </div>
 </div>
  <div class="note" id="90215">  <div class="votes">
    <div id="Vu90215">
    <a href="/manual/vote-note.php?id=90215&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90215">
    <a href="/manual/vote-note.php?id=90215&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90215" title="71% like this...">
    12
    </div>
  </div>
  <a href="#90215" class="name">
  <strong class="user"><em>harmen at no dot spam dot rdzl dot nl</em></strong></a><a class="genanchor" href="#90215"> &para;</a><div class="date" title="2009-04-10 10:53"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90215">
<div class="phpcode"><code><span class="html">To generate a random number which is different every day, I used the number of days after unix epoch as a seed:<br /><br /><span class="default">&lt;?php  <br />   srand</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">time</span><span class="keyword">() / (</span><span class="default">60</span><span class="keyword">*</span><span class="default">60</span><span class="keyword">*</span><span class="default">24</span><span class="keyword">)));<br />   echo </span><span class="default">rand</span><span class="keyword">() % </span><span class="default">100</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />My provider upgraded the php server recently, and calling srand(seed) does not seem to set the seed anymore. To let srand set the seed, add the following line to your .htaccess file<br /><br />php_value suhosin.srand.ignore 0 <br /><br />Kudos to doc_z (<a href="http://www.webmasterworld.com/php/3777515.htm" rel="nofollow" target="_blank">http://www.webmasterworld.com/php/3777515.htm</a>)<br /><br />Harmen</span></code></div>
  </div>
 </div>
  <div class="note" id="13135">  <div class="votes">
    <div id="Vu13135">
    <a href="/manual/vote-note.php?id=13135&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13135">
    <a href="/manual/vote-note.php?id=13135&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13135" title="66% like this...">
    1
    </div>
  </div>
  <a href="#13135" class="name">
  <strong class="user"><em>rjones at ditzed dot org</em></strong></a><a class="genanchor" href="#13135"> &para;</a><div class="date" title="2001-05-29 11:41"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13135">
<div class="phpcode"><code><span class="html">Use the srand() seed "(double)microtime()*1000000" as mentioned by the richard@zend.com at the top of these user notes.
<br />
<br />The most notable effect of using any other seed is that your random numbers tend to follow the same, or very similar, sequences each time the script is invoked.
<br />
<br />Take note of the following script:
<br />
<br /><span class="default">&lt;?php
<br />  srand</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);
<br />
<br />  echo </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">) . </span><span class="string">", "</span><span class="keyword">;
<br />  echo </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">) . </span><span class="string">", "</span><span class="keyword">;
<br />  echo </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">) . </span><span class="string">", "</span><span class="keyword">;
<br />  echo </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">) . </span><span class="string">", "</span><span class="keyword">;
<br />  echo </span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">, </span><span class="default">20</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />If you seed the generator with a constant, say; the number 5 ($val = 5), then the sequence generated is always the same, in this case (0, 18, 7, 15, 17) (for me at least, different processors/processor speeds/operating systems/OS releases/PHP releases/webserver software may generate different sequences).
<br />
<br />If you seed the generator with time(), then the sequence is more random, but invokations that are very close together will have similar outputs.
<br />
<br />As richard@zend.com above suggests, the best seed to use is (double) microtime() * 1000000, as this gives the greatest amount of psuedo-randomness. In fact, it is random enough to suit most users.
<br />In a test program of 100000 random numbers between 1 and 20, the results were fairly balanced, giving an average of 5000 results per number, give or take 100. The deviation in each case varied with each invokation.</span></code></div>
  </div>
 </div>
  <div class="note" id="48424">  <div class="votes">
    <div id="Vu48424">
    <a href="/manual/vote-note.php?id=48424&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd48424">
    <a href="/manual/vote-note.php?id=48424&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V48424" title="52% like this...">
    1
    </div>
  </div>
  <a href="#48424" class="name">
  <strong class="user"><em>edublancoa at gmail dot com</em></strong></a><a class="genanchor" href="#48424"> &para;</a><div class="date" title="2004-12-23 01:39"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom48424">
<div class="phpcode"><code><span class="html">Another use of srand is to obtain the same value of rand in a determined time interval. Example: you have an array of 100 elements and you need to obtain a random item every day but not to change in the 24h period (just imagine "Today's Photo" or similar).<br /><span class="default">&lt;?php<br />$seed </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">time</span><span class="keyword">()/</span><span class="default">86400</span><span class="keyword">);<br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">$seed</span><span class="keyword">);<br /></span><span class="default">$item </span><span class="keyword">= </span><span class="default">$examplearray</span><span class="keyword">[</span><span class="default">rand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">,</span><span class="default">99</span><span class="keyword">)];<br /></span><span class="default">?&gt;<br /></span>You obtain the same value every time you load the page all the 24h period.</span></code></div>
  </div>
 </div>
  <div class="note" id="129127">  <div class="votes">
    <div id="Vu129127">
    <a href="/manual/vote-note.php?id=129127&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd129127">
    <a href="/manual/vote-note.php?id=129127&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V129127" title="no votes...">
    0
    </div>
  </div>
  <a href="#129127" class="name">
  <strong class="user"><em>contact at einenlum dot com</em></strong></a><a class="genanchor" href="#129127"> &para;</a><div class="date" title="2023-12-27 03:52"><strong>1 year ago</strong></div>
  <div class="text" id="Hcom129127">
<div class="phpcode"><code><span class="html">Keep in mind that now srand is an alias for mt_srand, but they behaved differently before. This means you should not follow the documentation of srand, but the one of mt_srand, when using srand.<br /><br />To reset the seed to a random value, `mt_srand(0)` (or `srand(0)`) doesn't work. It sets the seed to 0. To reset the seed to a random value you must use `mt_srand()` (or `srand()`).<br /><br /><span class="default">&lt;?php<br /><br />$arr </span><span class="keyword">= [</span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">];<br /><br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">); </span><span class="comment">// or mt_srand(1) as they are now aliases<br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// not random as expected<br /><br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">); </span><span class="comment">// or mt_srand(0) as they are now aliases<br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// not random either!<br /><br /></span><span class="default">srand</span><span class="keyword">(); </span><span class="comment">// or mt_srand() as they are now aliases<br /></span><span class="default">$keys </span><span class="keyword">= </span><span class="default">array_rand</span><span class="keyword">(</span><span class="default">$arr</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">); </span><span class="comment">// random again<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="53577">  <div class="votes">
    <div id="Vu53577">
    <a href="/manual/vote-note.php?id=53577&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd53577">
    <a href="/manual/vote-note.php?id=53577&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V53577" title="50% like this...">
    0
    </div>
  </div>
  <a href="#53577" class="name">
  <strong class="user"><em>bootc at bootc dot net</em></strong></a><a class="genanchor" href="#53577"> &para;</a><div class="date" title="2005-06-06 08:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom53577">
<div class="phpcode"><code><span class="html">OK, to summarize what people have been saying so far:<br /><br />1. DO NOT seed the RNG more than once if you can help it!<br />2. You HAVE TO seed the RNG yourself if you are using PHP &lt; 4.2.0.<br />3. Using a prime multiplier to microtime() probably does very little. Use the Mersenne Twister instead.<br />4. You can use the Mersenne Twister PRNG with the mt_rand and mt_srand functions. This is faster and is more random.</span></code></div>
  </div>
 </div>
  <div class="note" id="16513">  <div class="votes">
    <div id="Vu16513">
    <a href="/manual/vote-note.php?id=16513&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd16513">
    <a href="/manual/vote-note.php?id=16513&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V16513" title="50% like this...">
    0
    </div>
  </div>
  <a href="#16513" class="name">
  <strong class="user"><em>mlwmohawk at mohawksoft dot com</em></strong></a><a class="genanchor" href="#16513"> &para;</a><div class="date" title="2001-11-02 07:51"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom16513">
<div class="phpcode"><code><span class="html">srand() is pretty tricky to get right. You should never seed a random number generator more than once per php process, if you do, your randomness is limited to the source of your seed.
<br />
<br />The microtime function's micro-seconds portion has a very finite resolution, that is why the make_seed function was added to the document. You should never get the same seed twice.
<br />
<br />In the later CVS versions, PHP will seed the random generator prior to performing a rand() if srand() was not previously called.</span></code></div>
  </div>
 </div>
  <div class="note" id="14790">  <div class="votes">
    <div id="Vu14790">
    <a href="/manual/vote-note.php?id=14790&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14790">
    <a href="/manual/vote-note.php?id=14790&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14790" title="50% like this...">
    0
    </div>
  </div>
  <a href="#14790" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#14790"> &para;</a><div class="date" title="2001-08-14 10:14"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14790">
<div class="phpcode"><code><span class="html">I have a ramdon circulater that changes a piece of text once a day, and I use the following code to make sure the see is unique enough.
<br />
<br />$tm = time();
<br />$today = mktime(0, 0, 0, (int)date("n", $tm), (int)date("j", $tm), (int)date("Y", $tm));                                                   
<br />srand($today / pi());
<br />
<br />The pi works wonders for the whole thing and it works like a charm. Any other big decimal number will do as well, but pi is the most common "big" number.</span></code></div>
  </div>
 </div>
  <div class="note" id="14774">  <div class="votes">
    <div id="Vu14774">
    <a href="/manual/vote-note.php?id=14774&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd14774">
    <a href="/manual/vote-note.php?id=14774&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V14774" title="50% like this...">
    0
    </div>
  </div>
  <a href="#14774" class="name">
  <strong class="user"><em>akukula at min dot pl</em></strong></a><a class="genanchor" href="#14774"> &para;</a><div class="date" title="2001-08-14 07:14"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom14774">
<div class="phpcode"><code><span class="html">Calling srand((double)microtime()*1000000),
<br />then $a=rand(1000000,9999999), then srand((double)microtime()*$a)
<br />adds nothing to the entrophy: the execution time of rand and srand is
<br />constant, so the second microtime() produces nothing really fascinating. You may safely use just the first srand().</span></code></div>
  </div>
 </div>
  <div class="note" id="13136">  <div class="votes">
    <div id="Vu13136">
    <a href="/manual/vote-note.php?id=13136&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd13136">
    <a href="/manual/vote-note.php?id=13136&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V13136" title="50% like this...">
    0
    </div>
  </div>
  <a href="#13136" class="name">
  <strong class="user"><em>rjones at ditzed dot org</em></strong></a><a class="genanchor" href="#13136"> &para;</a><div class="date" title="2001-05-29 12:02"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom13136">
<div class="phpcode"><code><span class="html">As a sidenote on the usage of srand():
<br />
<br />If you are making use of modular programming, it is probably better to try and call the srand routine from the parent script than from any modules you may be using (using REQUIRE or INCLUDE).
<br />This way you get around the possibility of calling srand() more than once from different modules.
<br />
<br />The flaw in this solution, of course, is when using modules produced by another programmer, or when producing modules for another programmer.
<br />You cannot rely on another programmer calling the srand function before calling the modular function, so you would have to include the srand function inside the module in this case.
<br />
<br />If you produce modules for use by other programmers then it is good practice to documentise the fact you have already called the srand function.
<br />Or if you use a modular function produced by someone else, check their documentation, or check their source code.</span></code></div>
  </div>
 </div>
  <div class="note" id="10953">  <div class="votes">
    <div id="Vu10953">
    <a href="/manual/vote-note.php?id=10953&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10953">
    <a href="/manual/vote-note.php?id=10953&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10953" title="50% like this...">
    0
    </div>
  </div>
  <a href="#10953" class="name">
  <strong class="user"><em>MakeMoolah at themail dot com</em></strong></a><a class="genanchor" href="#10953"> &para;</a><div class="date" title="2001-01-28 03:16"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10953">
<div class="phpcode"><code><span class="html">Sorry about that...  ok, forget have of what I said up there ^.
<br />
<br />The code that would prove my example is this:
<br />
<br /><span class="default">&lt;?php
<br />srand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br /></span><span class="default">srand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />Each time you SHOULD get the same answer, but if you did this:
<br />
<br /><span class="default">&lt;?php
<br />srand</span><span class="keyword">(</span><span class="default">5</span><span class="keyword">);
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br />echo(</span><span class="default">rand</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />then the answers would be different, and you'd be letting the random number formula do it's duty.</span></code></div>
  </div>
 </div>
  <div class="note" id="8986">  <div class="votes">
    <div id="Vu8986">
    <a href="/manual/vote-note.php?id=8986&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd8986">
    <a href="/manual/vote-note.php?id=8986&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V8986" title="47% like this...">
    -1
    </div>
  </div>
  <a href="#8986" class="name">
  <strong class="user"><em>hagen at von-eitzen dot de</em></strong></a><a class="genanchor" href="#8986"> &para;</a><div class="date" title="2000-10-10 03:51"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom8986">
<div class="phpcode"><code><span class="html">It is REALLY essential to make sure that srand is called only once.
<br />This is a bit difficult if the call is hidden somewhere in third-party code you include. For example, I used a standard banner script that *seemed* to work well putting
<br />three random banners in one frame. But in the long run, the choice appeared
<br />somewhat biased - probably because srand was called once per banner, not
<br />once per run.
<br />It would be nice if the random number generator worked like in PERL: If You use the random function without having called srand ever before in a script,
<br />srand is invoked before (and automatically with a nice seed, hopefully).
<br />I suggest that one should do something like this:
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">if (!</span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"IHaveCalledSrandBefore"</span><span class="keyword">]++) { 
<br />  </span><span class="default">srand</span><span class="keyword">((double) </span><span class="default">microtime</span><span class="keyword">() * </span><span class="default">1000000</span><span class="keyword">);
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />(Depending on the situation, one might also work with a static variable instead)</span></code></div>
  </div>
 </div>
  <div class="note" id="117966">  <div class="votes">
    <div id="Vu117966">
    <a href="/manual/vote-note.php?id=117966&amp;page=function.srand&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117966">
    <a href="/manual/vote-note.php?id=117966&amp;page=function.srand&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117966" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#117966" class="name">
  <strong class="user"><em>Glauco Lins</em></strong></a><a class="genanchor" href="#117966"> &para;</a><div class="date" title="2015-09-09 11:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117966">
<div class="phpcode"><code><span class="html">srand and mt_srand are both initialized only once per process ID.<br /><br />You cannot re-seed your rand algorithms after the first "srand", "mt_srand", "rand", "mt_rand", "shuffle", or any other rand-like function.<br /><br />I have been facing an issue where after forking my process, all childs were generating exactly the same rand values.<br />This was due a first "shuffle" call on the parent process, so I could not re-seed the childs.<br /><br />To solve my issue, I simple called "rand" N times, to offset the child rand generators.<br /><br /># Offset the child rand generator by its PID<br />$n = (getmypid() % 100) * (10 * abs(microtime(true) - time()));<br />for ($n; $n &gt; 0; $n--) {<br />      rand(0, $n);<br />}<br /><br />Since each pcntl_fork takes a while to be completed, the microtime offers an extra offset, other than one PID increment.<br /><br />This small code will make at the WORST hypothesis 1000 iterations.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.srand&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.srand.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
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
                                                <li class="current">
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
