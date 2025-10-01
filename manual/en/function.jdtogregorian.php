<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: jdtogregorian - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.jdtogregorian.php">
 <link rel="shorturl" href="https://www.php.net/jdtogregorian">
 <link rel="alternate" href="https://www.php.net/jdtogregorian" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.calendar.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.jdtofrench.php">
 <link rel="next" href="https://www.php.net/manual/en/function.jdtojewish.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.jdtogregorian.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.jdtogregorian.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.jdtogregorian.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.jdtogregorian.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.jdtogregorian.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.jdtogregorian.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.jdtogregorian.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.jdtogregorian.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.jdtogregorian.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.jdtogregorian.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.jdtogregorian.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Converts Julian Day Count to Gregorian date" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: jdtogregorian - Manual" />
<meta name="twitter:description" content="Converts Julian Day Count to Gregorian date" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: jdtogregorian - Manual" />
<meta itemprop="description" content="Converts Julian Day Count to Gregorian date" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Converts Julian Day Count to Gregorian date" />

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
        <a href="function.jdtojewish.php">
          jdtojewish &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.jdtofrench.php">
          &laquo; jdtofrench        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.calendar.php'>Date and Time Related Extensions</a></li>      <li><a href='book.calendar.php'>Calendar</a></li>      <li><a href='ref.calendar.php'>Calendar Functions</a></li>      </ul>
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
            <option value='en/function.jdtogregorian.php' selected="selected">English</option>
            <option value='de/function.jdtogregorian.php'>German</option>
            <option value='es/function.jdtogregorian.php'>Spanish</option>
            <option value='fr/function.jdtogregorian.php'>French</option>
            <option value='it/function.jdtogregorian.php'>Italian</option>
            <option value='ja/function.jdtogregorian.php'>Japanese</option>
            <option value='pt_BR/function.jdtogregorian.php'>Brazilian Portuguese</option>
            <option value='ru/function.jdtogregorian.php'>Russian</option>
            <option value='tr/function.jdtogregorian.php'>Turkish</option>
            <option value='uk/function.jdtogregorian.php'>Ukrainian</option>
            <option value='zh/function.jdtogregorian.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.jdtogregorian" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">jdtogregorian</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">jdtogregorian</span> &mdash; <span class="dc-title">Converts Julian Day Count to Gregorian date</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.jdtogregorian-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>jdtogregorian</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$julian_day</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Converts Julian Day Count to a string containing the Gregorian
   date in the format of &quot;month/day/year&quot;.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.jdtogregorian-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">julian_day</code></dt>
     <dd>
      <p class="para">
       A julian day number as integer
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.jdtogregorian-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The gregorian date as a string in the form &quot;month/day/year&quot;
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.jdtogregorian-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.gregoriantojd.php" class="function" rel="rdfs-seeAlso">gregoriantojd()</a> - Converts a Gregorian date to Julian Day Count</span></li> 
    <li><span class="function"><a href="function.cal-from-jd.php" class="function" rel="rdfs-seeAlso">cal_from_jd()</a> - Converts from Julian Day Count to a supported calendar</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/calendar/functions/jdtogregorian.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.jdtogregorian%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.jdtogregorian&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtogregorian.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="43470">  <div class="votes">
    <div id="Vu43470">
    <a href="/manual/vote-note.php?id=43470&amp;page=function.jdtogregorian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd43470">
    <a href="/manual/vote-note.php?id=43470&amp;page=function.jdtogregorian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V43470" title="71% like this...">
    3
    </div>
  </div>
  <a href="#43470" class="name">
  <strong class="user"><em>httpwebwitch</em></strong></a><a class="genanchor" href="#43470"> &para;</a><div class="date" title="2004-06-22 10:37"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom43470">
<div class="phpcode"><code><span class="html">JD days may have decimal fractions which correspond to the time of day. The Julian day begins at noon, and the decimal fraction measures fractional days until the beginning of the next day at noon.<br /><br />For instance, Julian Day 2453179.00000 is June 22, 2004, at 12:00pm (noon). <br /><br />One hour later, it's 2453179.04167<br />At 2453179.20833 I'll have dinner, and<br />at 2453179.45833, it's time for the evening news.<br />After a good night of sleep, my alarm will go off at 2453179.83333, <br />then at noon on June 23, a new Julian Day begins at 2453180.<br /><br />To use these functions with fractional days, strip the fractional part with floor(), and apply the function to the integer part. <br /><br />Then add 12 hours, bringing you to noon of that day. That is the actual time returned by JDToGregorian().<br /><br />Then add the fractional part of the day, by multiplying the decimal part of the Julian Day by (24*60*60) seconds. This may take you forward or backward to a different Gregorian calendar date.</span></code></div>
  </div>
 </div>
  <div class="note" id="32561">  <div class="votes">
    <div id="Vu32561">
    <a href="/manual/vote-note.php?id=32561&amp;page=function.jdtogregorian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd32561">
    <a href="/manual/vote-note.php?id=32561&amp;page=function.jdtogregorian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V32561" title="57% like this...">
    1
    </div>
  </div>
  <a href="#32561" class="name">
  <strong class="user"><em>treebe</em></strong></a><a class="genanchor" href="#32561"> &para;</a><div class="date" title="2003-05-31 05:01"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom32561">
<div class="phpcode"><code><span class="html">Julian to Gregorian date change.
<br />If you do not have the calendar extensions loaded this is little function works realy well.
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">jd_to_greg</span><span class="keyword">(</span><span class="default">$julian</span><span class="keyword">) {
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">$julian </span><span class="keyword">- </span><span class="default">1721119</span><span class="keyword">;
<br />    </span><span class="default">$calc1 </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$julian </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$year </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc1 </span><span class="keyword">/ </span><span class="default">146097</span><span class="keyword">);
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc1 </span><span class="keyword">- </span><span class="default">146097 </span><span class="keyword">* </span><span class="default">$year</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$julian </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">);
<br />    </span><span class="default">$calc2 </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$day </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">;
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc2 </span><span class="keyword">/ </span><span class="default">1461</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">$calc2 </span><span class="keyword">- </span><span class="default">1461 </span><span class="keyword">* </span><span class="default">$julian</span><span class="keyword">;
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$day </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">) / </span><span class="default">4</span><span class="keyword">);
<br />    </span><span class="default">$calc3 </span><span class="keyword">= </span><span class="default">5 </span><span class="keyword">* </span><span class="default">$day </span><span class="keyword">- </span><span class="default">3</span><span class="keyword">;
<br />    </span><span class="default">$month </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc3 </span><span class="keyword">/ </span><span class="default">153</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">$calc3 </span><span class="keyword">- </span><span class="default">153 </span><span class="keyword">* </span><span class="default">$month</span><span class="keyword">;
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$day </span><span class="keyword">+ </span><span class="default">5</span><span class="keyword">) / </span><span class="default">5</span><span class="keyword">);
<br />    </span><span class="default">$year </span><span class="keyword">= </span><span class="default">100 </span><span class="keyword">* </span><span class="default">$year </span><span class="keyword">+ </span><span class="default">$julian</span><span class="keyword">;
<br />
<br />    if (</span><span class="default">$month </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">) {
<br />        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$month </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">;
<br />    }
<br />    else {
<br />        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$month </span><span class="keyword">- </span><span class="default">9</span><span class="keyword">;
<br />        </span><span class="default">$year </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />    }
<br />    return </span><span class="string">"</span><span class="default">$day</span><span class="string">.</span><span class="default">$month</span><span class="string">.</span><span class="default">$year</span><span class="string">"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="88469">  <div class="votes">
    <div id="Vu88469">
    <a href="/manual/vote-note.php?id=88469&amp;page=function.jdtogregorian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88469">
    <a href="/manual/vote-note.php?id=88469&amp;page=function.jdtogregorian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88469" title="50% like this...">
    0
    </div>
  </div>
  <a href="#88469" class="name">
  <strong class="user"><em>swiles at ddbc dot edu dot tw</em></strong></a><a class="genanchor" href="#88469"> &para;</a><div class="date" title="2009-01-25 09:34"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88469">
<div class="phpcode"><code><span class="html">The php gregoriantojd() and jdtogregorian() functions, in addition to the limitations noted by httpwebwitch, does not take account of the 'Astronomical' system of reckoning - i.e. using a year zero, instead of going directly from 1BCE to 1CE, as with the Christian Anno Domini system.<br /><br />These functions can be used to wrap the php built-ins to return ISO 8601 compliant dates:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">ISO8601toJD</span><span class="keyword">(</span><span class="default">$ceDate</span><span class="keyword">) {<br />    list(</span><span class="default">$day</span><span class="keyword">, </span><span class="default">$month</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">) = </span><span class="default">array_map</span><span class="keyword">(</span><span class="string">'strrev'</span><span class="keyword">,</span><span class="default">explode</span><span class="keyword">(</span><span class="string">'-'</span><span class="keyword">, </span><span class="default">strrev</span><span class="keyword">(</span><span class="default">$ceDate</span><span class="keyword">), </span><span class="default">3</span><span class="keyword">));<br />    if (</span><span class="default">$year </span><span class="keyword">&lt;= </span><span class="default">0</span><span class="keyword">) </span><span class="default">$year</span><span class="keyword">--;<br />    return </span><span class="default">gregoriantojd</span><span class="keyword">(</span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">);<br />}<br /><br />function </span><span class="default">JDtoISO8601</span><span class="keyword">(</span><span class="default">$JD</span><span class="keyword">) {<br />    if (</span><span class="default">$JD </span><span class="keyword">&lt;= </span><span class="default">1721425</span><span class="keyword">) </span><span class="default">$JD </span><span class="keyword">+= </span><span class="default">365</span><span class="keyword">;<br />    list(</span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">) = </span><span class="default">explode</span><span class="keyword">(</span><span class="string">'/'</span><span class="keyword">, </span><span class="default">jdtogregorian</span><span class="keyword">(</span><span class="default">$JD</span><span class="keyword">));<br />    return </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'%+05d-%02d-%02d'</span><span class="keyword">, </span><span class="default">$year</span><span class="keyword">, </span><span class="default">$month</span><span class="keyword">, </span><span class="default">$day</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="119906">  <div class="votes">
    <div id="Vu119906">
    <a href="/manual/vote-note.php?id=119906&amp;page=function.jdtogregorian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119906">
    <a href="/manual/vote-note.php?id=119906&amp;page=function.jdtogregorian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119906" title="0% like this...">
    -1
    </div>
  </div>
  <a href="#119906" class="name">
  <strong class="user"><em>ashton at ieee dot org</em></strong></a><a class="genanchor" href="#119906"> &para;</a><div class="date" title="2016-09-18 08:08"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119906">
<div class="phpcode"><code><span class="html">The minimum acceptable input Julian day count is 1, which produces an output of "11/25/-4714" (at least in my operating system and location) which means 25 November 4714 BC. PHP does not recognize the year 0. Astronomers do use the year 0, and would write the Gregorian date that corresponds to Julian day number 1 as 25 November -4713.</span></code></div>
  </div>
 </div>
  <div class="note" id="35774">  <div class="votes">
    <div id="Vu35774">
    <a href="/manual/vote-note.php?id=35774&amp;page=function.jdtogregorian&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35774">
    <a href="/manual/vote-note.php?id=35774&amp;page=function.jdtogregorian&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35774" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#35774" class="name">
  <strong class="user"><em>uni_fl4r3  at t hotmail dot com</em></strong></a><a class="genanchor" href="#35774"> &para;</a><div class="date" title="2003-09-14 08:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35774">
<div class="phpcode"><code><span class="html">I have made a slight modification to treebe's jd to greg function, this one will transform a unix timestamp to Gregorian day/month/year format...
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">unix_to_greg</span><span class="keyword">(</span><span class="default">$unix_timestamp</span><span class="keyword">) {
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((((</span><span class="default">$unix_timestamp </span><span class="keyword">/ </span><span class="string">"60"</span><span class="keyword">) / </span><span class="string">"60"</span><span class="keyword">) / </span><span class="string">"24"</span><span class="keyword">) + </span><span class="string">"2440588"</span><span class="keyword">);
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">$julian </span><span class="keyword">- </span><span class="default">1721119</span><span class="keyword">;
<br />    </span><span class="default">$calc1 </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$julian </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;
<br />    </span><span class="default">$year </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc1 </span><span class="keyword">/ </span><span class="default">146097</span><span class="keyword">);
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc1 </span><span class="keyword">- </span><span class="default">146097 </span><span class="keyword">* </span><span class="default">$year</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$julian </span><span class="keyword">/ </span><span class="default">4</span><span class="keyword">);
<br />    </span><span class="default">$calc2 </span><span class="keyword">= </span><span class="default">4 </span><span class="keyword">* </span><span class="default">$day </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">;
<br />    </span><span class="default">$julian </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc2 </span><span class="keyword">/ </span><span class="default">1461</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">$calc2 </span><span class="keyword">- </span><span class="default">1461 </span><span class="keyword">* </span><span class="default">$julian</span><span class="keyword">;
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$day </span><span class="keyword">+ </span><span class="default">4</span><span class="keyword">) / </span><span class="default">4</span><span class="keyword">);
<br />    </span><span class="default">$calc3 </span><span class="keyword">= </span><span class="default">5 </span><span class="keyword">* </span><span class="default">$day </span><span class="keyword">- </span><span class="default">3</span><span class="keyword">;
<br />    </span><span class="default">$month </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$calc3 </span><span class="keyword">/ </span><span class="default">153</span><span class="keyword">);
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">$calc3 </span><span class="keyword">- </span><span class="default">153 </span><span class="keyword">* </span><span class="default">$month</span><span class="keyword">;
<br />    </span><span class="default">$day </span><span class="keyword">= </span><span class="default">floor</span><span class="keyword">((</span><span class="default">$day </span><span class="keyword">+ </span><span class="default">5</span><span class="keyword">) / </span><span class="default">5</span><span class="keyword">);
<br />    </span><span class="default">$year </span><span class="keyword">= </span><span class="default">100 </span><span class="keyword">* </span><span class="default">$year </span><span class="keyword">+ </span><span class="default">$julian</span><span class="keyword">;
<br />    
<br />    if (</span><span class="default">$month </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$month </span><span class="keyword">+ </span><span class="default">3</span><span class="keyword">;
<br />    }else{
<br />        </span><span class="default">$month </span><span class="keyword">= </span><span class="default">$month </span><span class="keyword">- </span><span class="default">9</span><span class="keyword">;
<br />        </span><span class="default">$year </span><span class="keyword">= </span><span class="default">$year </span><span class="keyword">+ </span><span class="default">1</span><span class="keyword">;
<br />    }
<br />    return </span><span class="string">"</span><span class="default">$day</span><span class="string">.</span><span class="default">$month</span><span class="string">.</span><span class="default">$year</span><span class="string">"</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.jdtogregorian&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.jdtogregorian.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.calendar.php">Calendar Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.cal-days-in-month.php" title="cal_&#8203;days_&#8203;in_&#8203;month">cal_&#8203;days_&#8203;in_&#8203;month</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-from-jd.php" title="cal_&#8203;from_&#8203;jd">cal_&#8203;from_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-info.php" title="cal_&#8203;info">cal_&#8203;info</a>
                        </li>
                                                <li class="">
                            <a href="function.cal-to-jd.php" title="cal_&#8203;to_&#8203;jd">cal_&#8203;to_&#8203;jd</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-date.php" title="easter_&#8203;date">easter_&#8203;date</a>
                        </li>
                                                <li class="">
                            <a href="function.easter-days.php" title="easter_&#8203;days">easter_&#8203;days</a>
                        </li>
                                                <li class="">
                            <a href="function.frenchtojd.php" title="frenchtojd">frenchtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.gregoriantojd.php" title="gregoriantojd">gregoriantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.jddayofweek.php" title="jddayofweek">jddayofweek</a>
                        </li>
                                                <li class="">
                            <a href="function.jdmonthname.php" title="jdmonthname">jdmonthname</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtofrench.php" title="jdtofrench">jdtofrench</a>
                        </li>
                                                <li class="current">
                            <a href="function.jdtogregorian.php" title="jdtogregorian">jdtogregorian</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtojewish.php" title="jdtojewish">jdtojewish</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtojulian.php" title="jdtojulian">jdtojulian</a>
                        </li>
                                                <li class="">
                            <a href="function.jdtounix.php" title="jdtounix">jdtounix</a>
                        </li>
                                                <li class="">
                            <a href="function.jewishtojd.php" title="jewishtojd">jewishtojd</a>
                        </li>
                                                <li class="">
                            <a href="function.juliantojd.php" title="juliantojd">juliantojd</a>
                        </li>
                                                <li class="">
                            <a href="function.unixtojd.php" title="unixtojd">unixtojd</a>
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
