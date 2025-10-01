<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: str_rot13 - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.str-rot13.php">
 <link rel="shorturl" href="https://www.php.net/str-rot13">
 <link rel="alternate" href="https://www.php.net/str-rot13" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.strings.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.str-replace.php">
 <link rel="next" href="https://www.php.net/manual/en/function.str-shuffle.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.str-rot13.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.str-rot13.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.str-rot13.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.str-rot13.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.str-rot13.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.str-rot13.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.str-rot13.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.str-rot13.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.str-rot13.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.str-rot13.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.str-rot13.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Perform the rot13 transform on a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: str_rot13 - Manual" />
<meta name="twitter:description" content="Perform the rot13 transform on a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: str_rot13 - Manual" />
<meta itemprop="description" content="Perform the rot13 transform on a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Perform the rot13 transform on a string" />

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
        <a href="function.str-shuffle.php">
          str_shuffle &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.str-replace.php">
          &laquo; str_replace        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.strings.php'>Strings</a></li>      <li><a href='ref.strings.php'>String Functions</a></li>      </ul>
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
            <option value='en/function.str-rot13.php' selected="selected">English</option>
            <option value='de/function.str-rot13.php'>German</option>
            <option value='es/function.str-rot13.php'>Spanish</option>
            <option value='fr/function.str-rot13.php'>French</option>
            <option value='it/function.str-rot13.php'>Italian</option>
            <option value='ja/function.str-rot13.php'>Japanese</option>
            <option value='pt_BR/function.str-rot13.php'>Brazilian Portuguese</option>
            <option value='ru/function.str-rot13.php'>Russian</option>
            <option value='tr/function.str-rot13.php'>Turkish</option>
            <option value='uk/function.str-rot13.php'>Ukrainian</option>
            <option value='zh/function.str-rot13.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.str-rot13" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">str_rot13</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">str_rot13</span> &mdash; <span class="dc-title">Perform the rot13 transform on a string</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.str-rot13-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>str_rot13</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$string</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Performs the ROT13 encoding on the <code class="parameter">string</code> argument and
   returns the resulting string.
  </p>
  <p class="para">
   The ROT13 encoding simply shifts every letter by 13 places in the alphabet
   while leaving non-alpha characters untouched. Encoding and decoding are
   done by the same function, passing an encoded string as argument will
   return the original version.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.str-rot13-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">string</code></dt>
     <dd>
      <p class="para">
       The input string.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.str-rot13-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the ROT13 version of the given string.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.str-rot13-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5141">
    <p><strong>Example #1 <span class="function"><strong>str_rot13()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">str_rot13</span><span style="color: #007700">(</span><span style="color: #DD0000">'PHP 4.3.0'</span><span style="color: #007700">); </span><span style="color: #FF8000">// CUC 4.3.0<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/strings/functions/str-rot13.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.str-rot13%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.str-rot13&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-rot13.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">9 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="107475">  <div class="votes">
    <div id="Vu107475">
    <a href="/manual/vote-note.php?id=107475&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd107475">
    <a href="/manual/vote-note.php?id=107475&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V107475" title="68% like this...">
    43
    </div>
  </div>
  <a href="#107475" class="name">
  <strong class="user"><em>shaun</em></strong></a><a class="genanchor" href="#107475"> &para;</a><div class="date" title="2012-02-11 02:44"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom107475">
<div class="phpcode"><code><span class="html">I was reminded again of the desire for a generic str_rot function. Character manipulation loops in PHP are slow compared to their C counterparts, so here's a tuned version of the previous function I posted. It's 1.6 times as fast, mainly by avoiding chr() calls.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_rot</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">) {<br />    static </span><span class="default">$letters </span><span class="keyword">= </span><span class="string">'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'</span><span class="keyword">;<br />    </span><span class="default">$n </span><span class="keyword">= (int)</span><span class="default">$n </span><span class="keyword">% </span><span class="default">26</span><span class="keyword">;<br />    if (!</span><span class="default">$n</span><span class="keyword">) return </span><span class="default">$s</span><span class="keyword">;<br />    if (</span><span class="default">$n </span><span class="keyword">== </span><span class="default">13</span><span class="keyword">) return </span><span class="default">str_rot13</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$l </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">); </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$l</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        if (</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">'a' </span><span class="keyword">&amp;&amp; </span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">'z'</span><span class="keyword">) {<br />            </span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$letters</span><span class="keyword">[(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) - </span><span class="default">71 </span><span class="keyword">+ </span><span class="default">$n</span><span class="keyword">) % </span><span class="default">26</span><span class="keyword">];<br />        } else if (</span><span class="default">$c </span><span class="keyword">&gt;= </span><span class="string">'A' </span><span class="keyword">&amp;&amp; </span><span class="default">$c </span><span class="keyword">&lt;= </span><span class="string">'Z'</span><span class="keyword">) {<br />            </span><span class="default">$s</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] = </span><span class="default">$letters</span><span class="keyword">[(</span><span class="default">ord</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">) - </span><span class="default">39 </span><span class="keyword">+ </span><span class="default">$n</span><span class="keyword">) % </span><span class="default">26 </span><span class="keyword">+ </span><span class="default">26</span><span class="keyword">];<br />        }<br />    }<br />    return </span><span class="default">$s</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;<br /></span><br />But using strtr() you can get something 10 times as fast as the above :<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">str_rot</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">) {<br />    static </span><span class="default">$letters </span><span class="keyword">= </span><span class="string">'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz'</span><span class="keyword">;<br />    </span><span class="default">$n </span><span class="keyword">= (int)</span><span class="default">$n </span><span class="keyword">% </span><span class="default">26</span><span class="keyword">;<br />    if (!</span><span class="default">$n</span><span class="keyword">) return </span><span class="default">$s</span><span class="keyword">;<br />    if (</span><span class="default">$n </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) </span><span class="default">$n </span><span class="keyword">+= </span><span class="default">26</span><span class="keyword">;<br />    if (</span><span class="default">$n </span><span class="keyword">== </span><span class="default">13</span><span class="keyword">) return </span><span class="default">str_rot13</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">);<br />    </span><span class="default">$rep </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">) . </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">* </span><span class="default">2</span><span class="keyword">);<br />    return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$letters</span><span class="keyword">, </span><span class="default">$rep</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />This technique is faster because PHP's strtr is implemented in C using a byte lookup table (it has O(m + n) complexity). However, PHP 6 will use Unicode, so I guess(?) strtr will then have to be implemented with a search for each character (O(m * n)). Using strtr might still be faster since it offloads the character manipulation to C rather than PHP, but I don't really know. Take your pick.<br /><br />Happy coding!<br /><br />(Benchmark code):<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">for (</span><span class="default">$k </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$k </span><span class="keyword">&lt; </span><span class="default">10</span><span class="keyword">; </span><span class="default">$k</span><span class="keyword">++) {<br />    </span><span class="default">$s </span><span class="keyword">= </span><span class="string">'The quick brown fox jumps over the lazy dog.'</span><span class="keyword">;<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) </span><span class="default">$s </span><span class="keyword">= </span><span class="default">str_rot</span><span class="keyword">(</span><span class="default">$s</span><span class="keyword">, </span><span class="default">$i</span><span class="keyword">);<br />    </span><span class="default">$t </span><span class="keyword">= </span><span class="default">microtime</span><span class="keyword">(</span><span class="default">1</span><span class="keyword">) - </span><span class="default">$t</span><span class="keyword">;<br />    echo </span><span class="default">number_format</span><span class="keyword">(</span><span class="default">$t</span><span class="keyword">, </span><span class="default">3</span><span class="keyword">) . </span><span class="string">"\n"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117555">  <div class="votes">
    <div id="Vu117555">
    <a href="/manual/vote-note.php?id=117555&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117555">
    <a href="/manual/vote-note.php?id=117555&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117555" title="58% like this...">
    3
    </div>
  </div>
  <a href="#117555" class="name">
  <strong class="user"><em>arthur at kuhrmeier dot com</em></strong></a><a class="genanchor" href="#117555"> &para;</a><div class="date" title="2015-06-29 05:44"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117555">
<div class="phpcode"><code><span class="html">I was writing a function for my website to also rotate numbers, and kept expanding it. I added extra characters, the ability to define the shift in percent, and which type of characters to affect.<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//================================================== STRING ROTATE EXPANDED<br /></span><span class="keyword">function </span><span class="default">str_shift </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$perc</span><span class="keyword">=</span><span class="default">50</span><span class="keyword">, </span><span class="default">$useextra</span><span class="keyword">=</span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">$usedigits</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">$useupper</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">, </span><span class="default">$uselower</span><span class="keyword">=</span><span class="default">TRUE</span><span class="keyword">) {<br />    static </span><span class="default">$chars </span><span class="keyword">= array(<br />        </span><span class="string">'lower' </span><span class="keyword">=&gt; </span><span class="string">'abcdefghijklmnopqrstuvwxyz'</span><span class="keyword">,<br />        </span><span class="string">'upper' </span><span class="keyword">=&gt; </span><span class="string">'ABCDEFGHIJKLMNOPQRSTUVWXYZ'</span><span class="keyword">,<br />        </span><span class="string">'digits' </span><span class="keyword">=&gt; </span><span class="string">'0123456789'</span><span class="keyword">,<br />        </span><span class="string">'extra' </span><span class="keyword">=&gt; </span><span class="string">',.-()&lt;&gt;%/!"&amp;=;:_[]{}#\\?\'+*'</span><span class="keyword">,<br />    );<br />    </span><span class="default">settype</span><span class="keyword">(</span><span class="default">$perc</span><span class="keyword">, </span><span class="string">'float'</span><span class="keyword">);<br />    if  (!</span><span class="default">$perc</span><span class="keyword">)  return </span><span class="default">$string</span><span class="keyword">;<br />    </span><span class="default">$perc </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">((</span><span class="default">abs</span><span class="keyword">(</span><span class="default">$perc</span><span class="keyword">) &lt; </span><span class="default">1 </span><span class="keyword">? </span><span class="default">100</span><span class="keyword">*</span><span class="default">$perc </span><span class="keyword">: </span><span class="default">$perc</span><span class="keyword">), </span><span class="default">100</span><span class="keyword">);<br />    if  (</span><span class="default">$perc </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">)  </span><span class="default">$perc </span><span class="keyword">+= </span><span class="default">100</span><span class="keyword">;<br />    </span><span class="default">$use </span><span class="keyword">= (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$useextra</span><span class="keyword">) ? </span><span class="default">$useextra </span><span class="keyword">: array(</span><span class="string">'lower'</span><span class="keyword">=&gt;</span><span class="default">$uselower</span><span class="keyword">, </span><span class="string">'upper'</span><span class="keyword">=&gt;</span><span class="default">$useupper</span><span class="keyword">, </span><span class="string">'digits'</span><span class="keyword">=&gt;</span><span class="default">$usedigits</span><span class="keyword">, </span><span class="string">'extra'</span><span class="keyword">=&gt;</span><span class="default">$useextra</span><span class="keyword">));<br />    foreach (</span><span class="default">$chars </span><span class="keyword">as </span><span class="default">$type </span><span class="keyword">=&gt; </span><span class="default">$letters</span><span class="keyword">) {<br />        if  (!</span><span class="default">$use</span><span class="keyword">[</span><span class="default">$type</span><span class="keyword">])  continue;<br />        </span><span class="default">$shift </span><span class="keyword">= </span><span class="default">round</span><span class="keyword">(</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">) * </span><span class="default">$perc </span><span class="keyword">/ </span><span class="default">100</span><span class="keyword">);<br />        </span><span class="default">$repl </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">, </span><span class="default">$shift</span><span class="keyword">).</span><span class="default">substr</span><span class="keyword">(</span><span class="default">$letters</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">$shift</span><span class="keyword">);<br />        </span><span class="default">$string </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$letters</span><span class="keyword">, </span><span class="default">$repl</span><span class="keyword">);<br />    }<br />    return </span><span class="default">$string</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//===== USAGE =====<br /><br /></span><span class="default">string str_shift </span><span class="keyword">( </span><span class="default">string $str </span><span class="keyword">[, </span><span class="default">float $percent </span><span class="keyword">[, </span><span class="default">bool $useextra </span><span class="keyword">[, </span><span class="default">bool $usedigits </span><span class="keyword">[, </span><span class="default">bool $uselower </span><span class="keyword">[, </span><span class="default">bool $useupper</span><span class="keyword">] ] ] ] ] )<br /><br /></span><span class="default">string str_shift </span><span class="keyword">( </span><span class="default">string $str </span><span class="keyword">[, </span><span class="default">float $percent </span><span class="keyword">[, array </span><span class="default">$usetypes </span><span class="keyword">] ] )<br /><br /></span><span class="default">$usetypes </span><span class="keyword">= array(</span><span class="string">'lower'</span><span class="keyword">=&gt;</span><span class="default">bool $uselower</span><span class="keyword">, </span><span class="string">'upper'</span><span class="keyword">=&gt;</span><span class="default">bool $useupper</span><span class="keyword">, </span><span class="string">'digits'</span><span class="keyword">=&gt;</span><span class="default">bool $usedigits</span><span class="keyword">, </span><span class="string">'extra'</span><span class="keyword">=&gt;</span><span class="default">bool $useextra</span><span class="keyword">);<br /><br /></span><span class="comment">//===== EXAMPLES =====<br /><br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">"Peter's 17 pets (incl. 5 hamsters) love Dr Sarah Gibson, DVM!"</span><span class="keyword">;<br />echo </span><span class="default">str_shift</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />echo </span><span class="default">str_shift</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">);<br />echo </span><span class="default">str_shift</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, -</span><span class="default">25</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">, </span><span class="default">FALSE</span><span class="keyword">);<br />echo </span><span class="default">str_shift</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">/</span><span class="default">3</span><span class="keyword">);<br />echo </span><span class="default">str_shift</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">50</span><span class="keyword">, array(</span><span class="string">'lower'</span><span class="keyword">=&gt;</span><span class="default">TRUE</span><span class="keyword">, </span><span class="string">'digits'</span><span class="keyword">=&gt;</span><span class="default">TRUE</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />//===== RESULT =====<br /><br />Crgre'f 62 crgf (vapy. 0 unzfgref) ybir Qe Fnenu Tvofba, QIZ!<br />Crgre"f 62 crgf [vapy: 0 unzfgref] ybir Qe Fnenu Tvofba; QIZ?<br />Jynyl'm 17 jynm (chwf. 5 bugmnylm) fipy Xl Mulub Acvmih, XPG!<br />Yncna'b 40 yncb (rwlu. 8 qjvbcnab) uxen Ma Bjajq Prkbxw, MEV!<br />Prgre'f 62 crgf (vapy. 0 unzfgref) ybir De Snenu Gvofba, DVM!<br /><br />1. The basic parameters are the string and the percentage, 50 by default. The next four parameters allow to select which type of characters to process. There is a good reason why I put less common types first, and most obvious last. To activate extra characters you need only 1 additional parameter, otherwise you would need 4 enabling also the obvious types.<br /><br />2. The definition for the letters and digits is obvious. For the extra characters I chose kind of pairs that make sense when shifted by 50%, e.g. () =&gt; [] or &amp; =&gt; + etc. Of course you can adjust those characters to anything you like.<br /><br />3. The first step is to clean the percentage, and also allow "real" floats, e.g. 1/3 for 33.33%. <br /><br />4. The next step secures great flexibility when using the function. As described, instead of 4 boolean parameters you can pass 1 array. E.g. the array('upper' =&gt; TRUE) will enable the change of uppercase letters only.<br /><br />5. Finally the function goes through every type and shifts the characters according to the given percentage.<br /><br />I hope you can use this function and do some fancy stuff with it. Rotating characters doesn't really make sense, but it can be fun.<br /><br />Arthur :-)</span></code></div>
  </div>
 </div>
  <div class="note" id="93388">  <div class="votes">
    <div id="Vu93388">
    <a href="/manual/vote-note.php?id=93388&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd93388">
    <a href="/manual/vote-note.php?id=93388&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V93388" title="56% like this...">
    4
    </div>
  </div>
  <a href="#93388" class="name">
  <strong class="user"><em>peter at NOSPAM jamit dot com</em></strong></a><a class="genanchor" href="#93388"> &para;</a><div class="date" title="2009-09-07 07:31"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom93388">
<div class="phpcode"><code><span class="html">This ROT13 variant is different from my earlier version in that it retains 'ethnicity'. For example, a Chinese text when encrypted will remain Chinese, and the string will not be making sense (the real meaning will be encrypted). Just look at the code and you will understand.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">unichar2ords</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">) {        <br />    </span><span class="default">$char </span><span class="keyword">= </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="string">'UCS-4'</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="default">unpack</span><span class="keyword">(</span><span class="string">'N'</span><span class="keyword">, </span><span class="default">$char</span><span class="keyword">);            <br />    return </span><span class="default">$val</span><span class="keyword">[</span><span class="default">1</span><span class="keyword">];<br />    }<br /><br />function </span><span class="default">ords2unichar</span><span class="keyword">(</span><span class="default">$ords</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">){<br />    </span><span class="default">$char </span><span class="keyword">= </span><span class="default">pack</span><span class="keyword">(</span><span class="string">'N'</span><span class="keyword">, </span><span class="default">$ords</span><span class="keyword">);<br />    return </span><span class="default">mb_convert_encoding</span><span class="keyword">(</span><span class="default">$char</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">, </span><span class="string">'UCS-4'</span><span class="keyword">);            <br />    }<br /><br />function </span><span class="default">mbStringToArray </span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">) {<br />    if (empty(</span><span class="default">$string</span><span class="keyword">)) return </span><span class="default">false</span><span class="keyword">;<br />    for (</span><span class="default">$strlen </span><span class="keyword">= </span><span class="default">mb_strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">); </span><span class="default">$strlen </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">; ) {<br />        </span><span class="default">$array</span><span class="keyword">[] = </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        </span><span class="default">$string  </span><span class="keyword">= </span><span class="default">mb_substr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">, </span><span class="default">$strlen</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        </span><span class="default">$strlen  </span><span class="keyword">= </span><span class="default">$strlen </span><span class="keyword">- </span><span class="default">1</span><span class="keyword">;<br />        }<br />    return </span><span class="default">$array</span><span class="keyword">;<br />    }<br /><br />function </span><span class="default">unicodeRotN</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">) {<br />    </span><span class="default">$val </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$array </span><span class="keyword">= </span><span class="default">mbStringToArray </span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">, </span><span class="default">$encoding </span><span class="keyword">= </span><span class="string">'UTF-8'</span><span class="keyword">);<br />    </span><span class="default">$len </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">);<br />    for (</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$len</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$val </span><span class="keyword">.= </span><span class="default">ords2unichar</span><span class="keyword">(</span><span class="default">unichar2ords</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">], </span><span class="default">$encoding</span><span class="keyword">) + </span><span class="default">$offset</span><span class="keyword">, </span><span class="default">$encoding</span><span class="keyword">);<br />        }<br />    return </span><span class="default">$val</span><span class="keyword">;<br />    }<br /><br /></span><span class="comment">// example<br /><br /></span><span class="default">$original </span><span class="keyword">= </span><span class="string">'中國是我的家'</span><span class="keyword">; </span><span class="comment">// means "China is my home"<br /><br /></span><span class="default">$encrypted </span><span class="keyword">= </span><span class="default">unicodeRotN</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">13</span><span class="keyword">); </span><span class="comment">// 为團昼戞皑寃 means "Ñ Ai injustice for the Mission Day" (Google translation)<br /><br /></span><span class="default">$decrypted </span><span class="keyword">= </span><span class="default">unicodeRotN</span><span class="keyword">(</span><span class="default">$encrypted</span><span class="keyword">, -</span><span class="default">13</span><span class="keyword">); </span><span class="comment">// 中國是我的家<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75382">  <div class="votes">
    <div id="Vu75382">
    <a href="/manual/vote-note.php?id=75382&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75382">
    <a href="/manual/vote-note.php?id=75382&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75382" title="54% like this...">
    2
    </div>
  </div>
  <a href="#75382" class="name">
  <strong class="user"><em>maximius at gmail dot com</em></strong></a><a class="genanchor" href="#75382"> &para;</a><div class="date" title="2007-05-25 04:30"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75382">
<div class="phpcode"><code><span class="html">Perhaps someone will find this useful ;)<br /><br />&lt;?<br />           function rotN($s, $n){<br />                $s2 = "";<br />                for($i = 0; $i &lt; strlen($s); $i++){<br />                    $char2 = $char = ord($s{$i});<br />                    $cap = $char &amp; 32;<br /><br />                    $char &amp;= ~ $cap;<br />                    $char = $char &gt; 64 &amp;&amp; $char &lt; 123 ? (($char - 65 + $n) % 26 + 65) : $char;<br />                    $char |= $cap;<br />                    if($char &lt; 65 &amp;&amp; $char2 &gt; 64 || ($char &gt; 90 &amp;&amp; $char &lt; 97 &amp;&amp; ($char2 &lt; 91 || $char2 &gt; 96))) $char += 26;<br />                    else if($char &gt; 122 &amp;&amp; $char2 &lt; 123) $char -= 52;<br />                    if(strtoupper(chr($char2)) === chr($char2)) $char = strtoupper(chr($char)); else $char = strtolower(chr($char));<br />                    $s2 .= $char;<br />                }<br />                return $s2;<br />            }<br />?&gt;<br />It takes any string, $s, and any ROT value, $n. Just like str_rot13, it's both an encoder and decoder. To decode an encoded string, just pass -$n instead of $n.</span></code></div>
  </div>
 </div>
  <div class="note" id="123139">  <div class="votes">
    <div id="Vu123139">
    <a href="/manual/vote-note.php?id=123139&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123139">
    <a href="/manual/vote-note.php?id=123139&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123139" title="50% like this...">
    0
    </div>
  </div>
  <a href="#123139" class="name">
  <strong class="user"><em>Chris</em></strong></a><a class="genanchor" href="#123139"> &para;</a><div class="date" title="2018-09-18 11:58"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom123139">
<div class="phpcode"><code><span class="html">A nice, simple way of using rot-n. Allows for a lot of easy customisation, and works quickly. This function uses ASCII characters and values.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">rotn</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">) {<br />    </span><span class="default">$min </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;<br />    </span><span class="default">$max </span><span class="keyword">= </span><span class="default">127</span><span class="keyword">;<br />    </span><span class="default">$final </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    </span><span class="default">$new_string </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">);<br />    <br />    foreach (</span><span class="default">$new_string </span><span class="keyword">as </span><span class="default">$letter</span><span class="keyword">) {<br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$letter</span><span class="keyword">);<br />        </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$current</span><span class="keyword">+</span><span class="default">$n</span><span class="keyword">;<br /><br />        if (</span><span class="default">$val </span><span class="keyword">&gt;= </span><span class="default">$max</span><span class="keyword">) {<br />            </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$val </span><span class="keyword">- </span><span class="default">$max</span><span class="keyword">;<br />        }<br /><br />        if (</span><span class="default">$val </span><span class="keyword">&lt;= </span><span class="default">$min</span><span class="keyword">) {<br />            </span><span class="default">$val </span><span class="keyword">= </span><span class="default">$val </span><span class="keyword">+ </span><span class="default">$min</span><span class="keyword">;<br />        }<br /><br />        </span><span class="default">$current </span><span class="keyword">= </span><span class="default">$val</span><span class="keyword">;<br />        </span><span class="default">$final </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">);<br />    }<br /><br />    return </span><span class="default">$final</span><span class="keyword">;<br />}<br /><br />echo </span><span class="string">'Test 123 (4) -&gt; '</span><span class="keyword">.</span><span class="default">rotn</span><span class="keyword">(</span><span class="string">"Test 123"</span><span class="keyword">, </span><span class="default">4</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// Xiwx$567<br /></span><span class="keyword">echo </span><span class="string">'Test 123 (8) -&gt; '</span><span class="keyword">.</span><span class="default">rotn</span><span class="keyword">(</span><span class="string">"Test 123"</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// \m{|(9:;<br /></span><span class="keyword">echo </span><span class="string">'Test 123 (-4) -&gt; '</span><span class="keyword">.</span><span class="default">rotn</span><span class="keyword">(</span><span class="string">"Test 123"</span><span class="keyword">, -</span><span class="default">4</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// Paop-./<br /><br /></span><span class="default">$value </span><span class="keyword">= </span><span class="default">rotn</span><span class="keyword">(</span><span class="string">"Test 123"</span><span class="keyword">, </span><span class="default">8</span><span class="keyword">);<br />echo </span><span class="string">'Test 123 (Reverse [8 then -8]) -&gt; '</span><span class="keyword">.</span><span class="default">rotn</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">, -</span><span class="default">8</span><span class="keyword">).</span><span class="string">'&lt;br&gt;'</span><span class="keyword">; </span><span class="comment">// Test 123<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117421">  <div class="votes">
    <div id="Vu117421">
    <a href="/manual/vote-note.php?id=117421&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117421">
    <a href="/manual/vote-note.php?id=117421&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117421" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#117421" class="name">
  <strong class="user"><em>agente007_1_ at hotmail dot com</em></strong></a><a class="genanchor" href="#117421"> &para;</a><div class="date" title="2015-06-09 02:48"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117421">
<div class="phpcode"><code><span class="html">/**<br />SALVAJE COMENTARIO EN ESPAÑOL XD<br />*/<br /><br /><span class="default">&lt;?php  <br /><br />    <br />$cadena </span><span class="keyword">= </span><span class="default">$_POST</span><span class="keyword">[</span><span class="string">'entrada'</span><span class="keyword">];<br /><br /></span><span class="comment">/**convierte en cadena*/<br /></span><span class="default">$array </span><span class="keyword">= </span><span class="default">str_split</span><span class="keyword">(</span><span class="default">$cadena</span><span class="keyword">);<br /><br />echo </span><span class="default">$cadena </span><span class="keyword">.</span><span class="string">"&lt;br&gt;"</span><span class="keyword">;<br /><br />for (</span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">count</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">); </span><span class="default">$i</span><span class="keyword">++) { <br /><br />if( </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] &gt;= </span><span class="string">"A" </span><span class="keyword">&amp;&amp;  </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] &lt;= </span><span class="string">"M" </span><span class="keyword">){<br /></span><span class="default">$letra </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /></span><span class="default">$letra </span><span class="keyword">= </span><span class="default">$letra </span><span class="keyword">+ </span><span class="default">13</span><span class="keyword">;<br />echo </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$letra</span><span class="keyword">);<br />}<br /><br />if( </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] &gt;= </span><span class="string">"N" </span><span class="keyword">&amp;&amp;  </span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">] &lt;= </span><span class="string">"Z" </span><span class="keyword">){<br /></span><span class="default">$letra </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$array</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /></span><span class="default">$letra </span><span class="keyword">= </span><span class="default">$letra </span><span class="keyword">- </span><span class="default">13</span><span class="keyword">;<br />echo </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$letra</span><span class="keyword">);<br />}<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123244">  <div class="votes">
    <div id="Vu123244">
    <a href="/manual/vote-note.php?id=123244&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123244">
    <a href="/manual/vote-note.php?id=123244&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123244" title="40% like this...">
    -1
    </div>
  </div>
  <a href="#123244" class="name">
  <strong class="user"><em>devcoder at gmail dot com</em></strong></a><a class="genanchor" href="#123244"> &para;</a><div class="date" title="2018-10-20 11:29"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123244">
<div class="phpcode"><code><span class="html">My own generic rotN function<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">rotN</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$n </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">)<br />{<br />    </span><span class="default">$alphabet </span><span class="keyword">= </span><span class="default">join</span><span class="keyword">(</span><span class="default">range</span><span class="keyword">(</span><span class="string">'a'</span><span class="keyword">, </span><span class="string">'z'</span><span class="keyword">));<br />    </span><span class="default">$alen </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$alphabet</span><span class="keyword">);<br /><br />    </span><span class="default">$n </span><span class="keyword">%= </span><span class="default">$alen</span><span class="keyword">;<br />    if(</span><span class="default">$n </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />        </span><span class="default">$n </span><span class="keyword">+= </span><span class="default">$alen</span><span class="keyword">;<br />    }<br />    if(</span><span class="default">$n </span><span class="keyword">== </span><span class="default">0</span><span class="keyword">) {<br />        return </span><span class="default">$string</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$cycled </span><span class="keyword">= </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$alphabet </span><span class="keyword">. </span><span class="default">$alphabet</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">, </span><span class="default">$alen</span><span class="keyword">);<br />    </span><span class="default">$alphabet </span><span class="keyword">= </span><span class="default">$alphabet </span><span class="keyword">. </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$alphabet</span><span class="keyword">);<br />    </span><span class="default">$cycled </span><span class="keyword">= </span><span class="default">$cycled </span><span class="keyword">. </span><span class="default">strtoupper</span><span class="keyword">(</span><span class="default">$cycled</span><span class="keyword">);<br />    return </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$alphabet</span><span class="keyword">, </span><span class="default">$cycled</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75469">  <div class="votes">
    <div id="Vu75469">
    <a href="/manual/vote-note.php?id=75469&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75469">
    <a href="/manual/vote-note.php?id=75469&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75469" title="41% like this...">
    -3
    </div>
  </div>
  <a href="#75469" class="name">
  <strong class="user"><em>electro at whatever dot com</em></strong></a><a class="genanchor" href="#75469"> &para;</a><div class="date" title="2007-05-31 12:21"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75469">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br /></span><span class="comment">/**<br /> * Rotate each string characters by n positions in ASCII table<br /> * To encode use positive n, to decode - negative.<br /> * With n = 13 (ROT13), encode and decode n can be positive.<br /> * <br /> * @param string $string<br /> * @param integer $n<br /> * @return string<br /> */<br /></span><span class="keyword">function </span><span class="default">rotate</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">, </span><span class="default">$n</span><span class="keyword">) {<br />    <br />    </span><span class="default">$length </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">);<br />    </span><span class="default">$result </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    <br />    for(</span><span class="default">$i </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">; </span><span class="default">$i </span><span class="keyword">&lt; </span><span class="default">$length</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        </span><span class="default">$ascii </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$string</span><span class="keyword">{</span><span class="default">$i</span><span class="keyword">});<br />        <br />        </span><span class="default">$rotated </span><span class="keyword">= </span><span class="default">$ascii</span><span class="keyword">;<br />        <br />        if (</span><span class="default">$ascii </span><span class="keyword">&gt; </span><span class="default">64 </span><span class="keyword">&amp;&amp; </span><span class="default">$ascii </span><span class="keyword">&lt; </span><span class="default">91</span><span class="keyword">) {<br />            </span><span class="default">$rotated </span><span class="keyword">+= </span><span class="default">$n</span><span class="keyword">;<br />            </span><span class="default">$rotated </span><span class="keyword">&gt; </span><span class="default">90 </span><span class="keyword">&amp;&amp; </span><span class="default">$rotated </span><span class="keyword">+= -</span><span class="default">90 </span><span class="keyword">+ </span><span class="default">64</span><span class="keyword">;<br />            </span><span class="default">$rotated </span><span class="keyword">&lt; </span><span class="default">65 </span><span class="keyword">&amp;&amp; </span><span class="default">$rotated </span><span class="keyword">+= -</span><span class="default">64 </span><span class="keyword">+ </span><span class="default">90</span><span class="keyword">; <br />        } elseif (</span><span class="default">$ascii </span><span class="keyword">&gt; </span><span class="default">96 </span><span class="keyword">&amp;&amp; </span><span class="default">$ascii </span><span class="keyword">&lt; </span><span class="default">123</span><span class="keyword">) {<br />            </span><span class="default">$rotated </span><span class="keyword">+= </span><span class="default">$n</span><span class="keyword">;<br />            </span><span class="default">$rotated </span><span class="keyword">&gt; </span><span class="default">122 </span><span class="keyword">&amp;&amp; </span><span class="default">$rotated </span><span class="keyword">+= -</span><span class="default">122 </span><span class="keyword">+ </span><span class="default">96</span><span class="keyword">;<br />            </span><span class="default">$rotated </span><span class="keyword">&lt; </span><span class="default">97 </span><span class="keyword">&amp;&amp; </span><span class="default">$rotated </span><span class="keyword">+= -</span><span class="default">96 </span><span class="keyword">+ </span><span class="default">122</span><span class="keyword">; <br />        }<br />        <br />        </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$rotated</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="default">$enc </span><span class="keyword">= </span><span class="default">rotate</span><span class="keyword">(</span><span class="string">'string'</span><span class="keyword">, </span><span class="default">6</span><span class="keyword">);<br />echo </span><span class="string">"Encoded: </span><span class="default">$enc</span><span class="string">&lt;br/&gt;\n"</span><span class="keyword">;<br />echo </span><span class="string">'Decoded: ' </span><span class="keyword">. </span><span class="default">rotate</span><span class="keyword">(</span><span class="default">$enc</span><span class="keyword">, -</span><span class="default">6</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="76355">  <div class="votes">
    <div id="Vu76355">
    <a href="/manual/vote-note.php?id=76355&amp;page=function.str-rot13&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76355">
    <a href="/manual/vote-note.php?id=76355&amp;page=function.str-rot13&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76355" title="33% like this...">
    -4
    </div>
  </div>
  <a href="#76355" class="name">
  <strong class="user"><em>arwab at surrealwebs dot com</em></strong></a><a class="genanchor" href="#76355"> &para;</a><div class="date" title="2007-07-11 01:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76355">
<div class="phpcode"><code><span class="html">here's my rot function, it works anyway<br /><span class="default">&lt;?php<br /></span><span class="comment">/**<br /> * preforms the rotation algorithm on the passed in string<br /> */<br /></span><span class="keyword">function </span><span class="default">_rot</span><span class="keyword">( </span><span class="default">$str </span><span class="keyword">, </span><span class="default">$dist</span><span class="keyword">=</span><span class="default">13 </span><span class="keyword">){<br />    if( !</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$dist</span><span class="keyword">) || </span><span class="default">$dist </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">){<br />        </span><span class="default">$dist </span><span class="keyword">= </span><span class="default">13</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$u_lower </span><span class="keyword">=  </span><span class="default">65</span><span class="keyword">; </span><span class="default">$u_upper </span><span class="keyword">=  </span><span class="default">90</span><span class="keyword">;<br />    </span><span class="default">$l_lower </span><span class="keyword">=  </span><span class="default">97</span><span class="keyword">; </span><span class="default">$l_upper </span><span class="keyword">= </span><span class="default">122</span><span class="keyword">;<br />    <br />    </span><span class="default">$char_count </span><span class="keyword">= (</span><span class="default">$u_upper </span><span class="keyword">- </span><span class="default">$u_lower</span><span class="keyword">) +</span><span class="default">1</span><span class="keyword">;<br /><br />    while( </span><span class="default">$dist </span><span class="keyword">&gt; </span><span class="default">$char_count </span><span class="keyword">){<br />        </span><span class="default">$dist </span><span class="keyword">-= </span><span class="default">$char_count</span><span class="keyword">;<br />    }<br /><br />    </span><span class="default">$newstr </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    <br />    for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">); ++</span><span class="default">$i</span><span class="keyword">){<br />        </span><span class="default">$c </span><span class="keyword">= </span><span class="default">ord</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">]);<br /><br />        </span><span class="comment">/*<br />         * Check if the character is within the bounds of our function (a-zA-z)<br />         * if not it gets tacked on to the string as is and we move on to the <br />         * next one.<br />         */<br />        </span><span class="keyword">if( </span><span class="default">$c</span><span class="keyword">&lt;</span><span class="default">$u_lower </span><span class="keyword">|| </span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">$l_upper </span><span class="keyword">|| ( </span><span class="default">$c</span><span class="keyword">&gt;</span><span class="default">$u_upper </span><span class="keyword">&amp;&amp; </span><span class="default">$c </span><span class="keyword">&lt;</span><span class="default">$l_lower </span><span class="keyword">) ){<br />            </span><span class="default">$newstr </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />            continue;<br />        }<br /><br />        </span><span class="default">$lower </span><span class="keyword">= ( </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">$u_upper</span><span class="keyword">?</span><span class="default">$u_lower</span><span class="keyword">:</span><span class="default">$l_lower</span><span class="keyword">);<br />        </span><span class="default">$upper </span><span class="keyword">= ( </span><span class="default">$c</span><span class="keyword">&lt;=</span><span class="default">$u_upper</span><span class="keyword">?</span><span class="default">$u_upper</span><span class="keyword">:</span><span class="default">$l_upper</span><span class="keyword">);<br /><br />        </span><span class="default">$c </span><span class="keyword">+= </span><span class="default">$dist</span><span class="keyword">;<br /><br />        if( </span><span class="default">$c </span><span class="keyword">&gt; </span><span class="default">$upper</span><span class="keyword">){<br />            </span><span class="default">$c </span><span class="keyword">= ((</span><span class="default">$c </span><span class="keyword">- </span><span class="default">$upper</span><span class="keyword">) + (</span><span class="default">$lower</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">));<br />        }<br /><br />        </span><span class="default">$newstr </span><span class="keyword">.= </span><span class="default">chr</span><span class="keyword">(</span><span class="default">$c</span><span class="keyword">);<br />    }<br />    <br />    return </span><span class="default">$newstr</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.str-rot13&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.str-rot13.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.strings.php">String Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.addcslashes.php" title="addcslashes">addcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.addslashes.php" title="addslashes">addslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.bin2hex.php" title="bin2hex">bin2hex</a>
                        </li>
                                                <li class="">
                            <a href="function.chop.php" title="chop">chop</a>
                        </li>
                                                <li class="">
                            <a href="function.chr.php" title="chr">chr</a>
                        </li>
                                                <li class="">
                            <a href="function.chunk-split.php" title="chunk_&#8203;split">chunk_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uudecode.php" title="convert_&#8203;uudecode">convert_&#8203;uudecode</a>
                        </li>
                                                <li class="">
                            <a href="function.convert-uuencode.php" title="convert_&#8203;uuencode">convert_&#8203;uuencode</a>
                        </li>
                                                <li class="">
                            <a href="function.count-chars.php" title="count_&#8203;chars">count_&#8203;chars</a>
                        </li>
                                                <li class="">
                            <a href="function.crc32.php" title="crc32">crc32</a>
                        </li>
                                                <li class="">
                            <a href="function.crypt.php" title="crypt">crypt</a>
                        </li>
                                                <li class="">
                            <a href="function.echo.php" title="echo">echo</a>
                        </li>
                                                <li class="">
                            <a href="function.explode.php" title="explode">explode</a>
                        </li>
                                                <li class="">
                            <a href="function.fprintf.php" title="fprintf">fprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.get-html-translation-table.php" title="get_&#8203;html_&#8203;translation_&#8203;table">get_&#8203;html_&#8203;translation_&#8203;table</a>
                        </li>
                                                <li class="">
                            <a href="function.hebrev.php" title="hebrev">hebrev</a>
                        </li>
                                                <li class="">
                            <a href="function.hex2bin.php" title="hex2bin">hex2bin</a>
                        </li>
                                                <li class="">
                            <a href="function.html-entity-decode.php" title="html_&#8203;entity_&#8203;decode">html_&#8203;entity_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlentities.php" title="htmlentities">htmlentities</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars.php" title="htmlspecialchars">htmlspecialchars</a>
                        </li>
                                                <li class="">
                            <a href="function.htmlspecialchars-decode.php" title="htmlspecialchars_&#8203;decode">htmlspecialchars_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.implode.php" title="implode">implode</a>
                        </li>
                                                <li class="">
                            <a href="function.join.php" title="join">join</a>
                        </li>
                                                <li class="">
                            <a href="function.lcfirst.php" title="lcfirst">lcfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.levenshtein.php" title="levenshtein">levenshtein</a>
                        </li>
                                                <li class="">
                            <a href="function.localeconv.php" title="localeconv">localeconv</a>
                        </li>
                                                <li class="">
                            <a href="function.ltrim.php" title="ltrim">ltrim</a>
                        </li>
                                                <li class="">
                            <a href="function.md5.php" title="md5">md5</a>
                        </li>
                                                <li class="">
                            <a href="function.md5-file.php" title="md5_&#8203;file">md5_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.metaphone.php" title="metaphone">metaphone</a>
                        </li>
                                                <li class="">
                            <a href="function.nl-langinfo.php" title="nl_&#8203;langinfo">nl_&#8203;langinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.nl2br.php" title="nl2br">nl2br</a>
                        </li>
                                                <li class="">
                            <a href="function.number-format.php" title="number_&#8203;format">number_&#8203;format</a>
                        </li>
                                                <li class="">
                            <a href="function.ord.php" title="ord">ord</a>
                        </li>
                                                <li class="">
                            <a href="function.parse-str.php" title="parse_&#8203;str">parse_&#8203;str</a>
                        </li>
                                                <li class="">
                            <a href="function.print.php" title="print">print</a>
                        </li>
                                                <li class="">
                            <a href="function.printf.php" title="printf">printf</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-decode.php" title="quoted_&#8203;printable_&#8203;decode">quoted_&#8203;printable_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.quoted-printable-encode.php" title="quoted_&#8203;printable_&#8203;encode">quoted_&#8203;printable_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.quotemeta.php" title="quotemeta">quotemeta</a>
                        </li>
                                                <li class="">
                            <a href="function.rtrim.php" title="rtrim">rtrim</a>
                        </li>
                                                <li class="">
                            <a href="function.setlocale.php" title="setlocale">setlocale</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1.php" title="sha1">sha1</a>
                        </li>
                                                <li class="">
                            <a href="function.sha1-file.php" title="sha1_&#8203;file">sha1_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.similar-text.php" title="similar_&#8203;text">similar_&#8203;text</a>
                        </li>
                                                <li class="">
                            <a href="function.soundex.php" title="soundex">soundex</a>
                        </li>
                                                <li class="">
                            <a href="function.sprintf.php" title="sprintf">sprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.sscanf.php" title="sscanf">sscanf</a>
                        </li>
                                                <li class="">
                            <a href="function.str-contains.php" title="str_&#8203;contains">str_&#8203;contains</a>
                        </li>
                                                <li class="">
                            <a href="function.str-decrement.php" title="str_&#8203;decrement">str_&#8203;decrement</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ends-with.php" title="str_&#8203;ends_&#8203;with">str_&#8203;ends_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-getcsv.php" title="str_&#8203;getcsv">str_&#8203;getcsv</a>
                        </li>
                                                <li class="">
                            <a href="function.str-increment.php" title="str_&#8203;increment">str_&#8203;increment</a>
                        </li>
                                                <li class="">
                            <a href="function.str-ireplace.php" title="str_&#8203;ireplace">str_&#8203;ireplace</a>
                        </li>
                                                <li class="">
                            <a href="function.str-pad.php" title="str_&#8203;pad">str_&#8203;pad</a>
                        </li>
                                                <li class="">
                            <a href="function.str-repeat.php" title="str_&#8203;repeat">str_&#8203;repeat</a>
                        </li>
                                                <li class="">
                            <a href="function.str-replace.php" title="str_&#8203;replace">str_&#8203;replace</a>
                        </li>
                                                <li class="current">
                            <a href="function.str-rot13.php" title="str_&#8203;rot13">str_&#8203;rot13</a>
                        </li>
                                                <li class="">
                            <a href="function.str-shuffle.php" title="str_&#8203;shuffle">str_&#8203;shuffle</a>
                        </li>
                                                <li class="">
                            <a href="function.str-split.php" title="str_&#8203;split">str_&#8203;split</a>
                        </li>
                                                <li class="">
                            <a href="function.str-starts-with.php" title="str_&#8203;starts_&#8203;with">str_&#8203;starts_&#8203;with</a>
                        </li>
                                                <li class="">
                            <a href="function.str-word-count.php" title="str_&#8203;word_&#8203;count">str_&#8203;word_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.strcasecmp.php" title="strcasecmp">strcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strchr.php" title="strchr">strchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strcmp.php" title="strcmp">strcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strcoll.php" title="strcoll">strcoll</a>
                        </li>
                                                <li class="">
                            <a href="function.strcspn.php" title="strcspn">strcspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strip-tags.php" title="strip_&#8203;tags">strip_&#8203;tags</a>
                        </li>
                                                <li class="">
                            <a href="function.stripcslashes.php" title="stripcslashes">stripcslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stripos.php" title="stripos">stripos</a>
                        </li>
                                                <li class="">
                            <a href="function.stripslashes.php" title="stripslashes">stripslashes</a>
                        </li>
                                                <li class="">
                            <a href="function.stristr.php" title="stristr">stristr</a>
                        </li>
                                                <li class="">
                            <a href="function.strlen.php" title="strlen">strlen</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcasecmp.php" title="strnatcasecmp">strnatcasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strnatcmp.php" title="strnatcmp">strnatcmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncasecmp.php" title="strncasecmp">strncasecmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strncmp.php" title="strncmp">strncmp</a>
                        </li>
                                                <li class="">
                            <a href="function.strpbrk.php" title="strpbrk">strpbrk</a>
                        </li>
                                                <li class="">
                            <a href="function.strpos.php" title="strpos">strpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrchr.php" title="strrchr">strrchr</a>
                        </li>
                                                <li class="">
                            <a href="function.strrev.php" title="strrev">strrev</a>
                        </li>
                                                <li class="">
                            <a href="function.strripos.php" title="strripos">strripos</a>
                        </li>
                                                <li class="">
                            <a href="function.strrpos.php" title="strrpos">strrpos</a>
                        </li>
                                                <li class="">
                            <a href="function.strspn.php" title="strspn">strspn</a>
                        </li>
                                                <li class="">
                            <a href="function.strstr.php" title="strstr">strstr</a>
                        </li>
                                                <li class="">
                            <a href="function.strtok.php" title="strtok">strtok</a>
                        </li>
                                                <li class="">
                            <a href="function.strtolower.php" title="strtolower">strtolower</a>
                        </li>
                                                <li class="">
                            <a href="function.strtoupper.php" title="strtoupper">strtoupper</a>
                        </li>
                                                <li class="">
                            <a href="function.strtr.php" title="strtr">strtr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr.php" title="substr">substr</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-compare.php" title="substr_&#8203;compare">substr_&#8203;compare</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-count.php" title="substr_&#8203;count">substr_&#8203;count</a>
                        </li>
                                                <li class="">
                            <a href="function.substr-replace.php" title="substr_&#8203;replace">substr_&#8203;replace</a>
                        </li>
                                                <li class="">
                            <a href="function.trim.php" title="trim">trim</a>
                        </li>
                                                <li class="">
                            <a href="function.ucfirst.php" title="ucfirst">ucfirst</a>
                        </li>
                                                <li class="">
                            <a href="function.ucwords.php" title="ucwords">ucwords</a>
                        </li>
                                                <li class="">
                            <a href="function.vfprintf.php" title="vfprintf">vfprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vprintf.php" title="vprintf">vprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.vsprintf.php" title="vsprintf">vsprintf</a>
                        </li>
                                                <li class="">
                            <a href="function.wordwrap.php" title="wordwrap">wordwrap</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                        <li>
                <span class="header">Deprecated</span>
                <ul class="child-menu-list">
                                    <li class="">
                        <a href="function.convert-cyr-string.php" title="convert_&#8203;cyr_&#8203;string">convert_&#8203;cyr_&#8203;string</a>
                    </li>
                                    <li class="">
                        <a href="function.hebrevc.php" title="hebrevc">hebrevc</a>
                    </li>
                                    <li class="">
                        <a href="function.money-format.php" title="money_&#8203;format">money_&#8203;format</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-decode.php" title="utf8_&#8203;decode">utf8_&#8203;decode</a>
                    </li>
                                    <li class="">
                        <a href="function.utf8-encode.php" title="utf8_&#8203;encode">utf8_&#8203;encode</a>
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
