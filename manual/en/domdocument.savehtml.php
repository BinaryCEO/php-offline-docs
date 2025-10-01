<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::saveHTML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.savehtml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.savehtml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.savehtml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.save.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.savehtmlfile.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.savehtml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.savehtml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.savehtml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.savehtml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.savehtml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.savehtml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.savehtml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.savehtml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.savehtml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.savehtml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.savehtml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Dumps the internal document into a string using HTML formatting" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::saveHTML - Manual" />
<meta name="twitter:description" content="Dumps the internal document into a string using HTML formatting" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::saveHTML - Manual" />
<meta itemprop="description" content="Dumps the internal document into a string using HTML formatting" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Dumps the internal document into a string using HTML formatting" />

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
        <a href="domdocument.savehtmlfile.php">
          DOMDocument::saveHTMLFile &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.save.php">
          &laquo; DOMDocument::save        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      <li><a href='class.domdocument.php'>DOMDocument</a></li>      </ul>
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
            <option value='en/domdocument.savehtml.php' selected="selected">English</option>
            <option value='de/domdocument.savehtml.php'>German</option>
            <option value='es/domdocument.savehtml.php'>Spanish</option>
            <option value='fr/domdocument.savehtml.php'>French</option>
            <option value='it/domdocument.savehtml.php'>Italian</option>
            <option value='ja/domdocument.savehtml.php'>Japanese</option>
            <option value='pt_BR/domdocument.savehtml.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.savehtml.php'>Russian</option>
            <option value='tr/domdocument.savehtml.php'>Turkish</option>
            <option value='uk/domdocument.savehtml.php'>Ukrainian</option>
            <option value='zh/domdocument.savehtml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.savehtml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::saveHTML</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::saveHTML</span> &mdash; <span class="dc-title">
   Dumps the internal document into a string using HTML formatting
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.savehtml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::saveHTML</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$node</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates an HTML document from the DOM representation. This function is usually 
   called after building a new dom document from scratch as in the example below. 
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-domdocument.savehtml-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">node</code></dt>
     <dd>
      <p class="para">
       Optional parameter to output a subset of the document.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 
 <div class="refsect1 returnvalues" id="refsect1-domdocument.savehtml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the HTML, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>

 
 <div class="refsect1 examples" id="refsect1-domdocument.savehtml-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5786">
    <p><strong>Example #1 Saving a HTML tree into a string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'html'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$root</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$head </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'head'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$head </span><span style="color: #007700">= </span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$head</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$head</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createTextNode</span><span style="color: #007700">(</span><span style="color: #DD0000">'This is the title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$title</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveHTML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.savehtml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.savehtmlfile.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveHTMLFile()</a> - Dumps the internal document into a file using HTML formatting</span></li>
    <li><span class="methodname"><a href="domdocument.loadhtml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadHTML()</a> - Load HTML from a string</span></li>
    <li><span class="methodname"><a href="domdocument.loadhtmlfile.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadHTMLFile()</a> - Load HTML from a file</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/savehtml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.savehtml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.savehtml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.savehtml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">12 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119767">  <div class="votes">
    <div id="Vu119767">
    <a href="/manual/vote-note.php?id=119767&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119767">
    <a href="/manual/vote-note.php?id=119767&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119767" title="93% like this...">
    62
    </div>
  </div>
  <a href="#119767" class="name">
  <strong class="user"><em>tomas dot strejcek at ghn dot cz</em></strong></a><a class="genanchor" href="#119767"> &para;</a><div class="date" title="2016-08-20 12:34"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119767">
<div class="phpcode"><code><span class="html">As of PHP 5.4 and Libxml 2.6, there is currently simpler approach:<br /><br />when you load html as this<br /><br />$html-&gt;loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);<br /><br />in the output, there will be no doctype, html or body tags</span></code></div>
  </div>
 </div>
  <div class="note" id="121444">  <div class="votes">
    <div id="Vu121444">
    <a href="/manual/vote-note.php?id=121444&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121444">
    <a href="/manual/vote-note.php?id=121444&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121444" title="88% like this...">
    33
    </div>
  </div>
  <a href="#121444" class="name">
  <strong class="user"><em>sasha @ goldnet dot ca</em></strong></a><a class="genanchor" href="#121444"> &para;</a><div class="date" title="2017-07-27 04:21"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121444">
<div class="phpcode"><code><span class="html">When saving HTML fragment initiated with LIBXML_HTML_NOIMPLIED option, it will end up being "broken" as libxml requires root element. libxml will attempt to fix the fragment by adding closing tag at the end of string based on the first opened tag it encounters in the fragment. <br /><br />For an example:<br /><br />&lt;h1&gt;Foo&lt;/h1&gt;&lt;p&gt;bar&lt;/p&gt;<br /><br />will end up as:<br /><br />&lt;h1&gt;Foo&lt;p&gt;bar&lt;/p&gt;&lt;/h1&gt;<br /><br />Easiest workaround is adding root tag yourself and stripping it later:<br /><br />$html-&gt;loadHTML('&lt;html&gt;' . $content .'&lt;/html&gt;', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);<br /><br />$content = str_replace(array('&lt;html&gt;','&lt;/html&gt;') , '' , $html-&gt;saveHTML());</span></code></div>
  </div>
 </div>
  <div class="note" id="121700">  <div class="votes">
    <div id="Vu121700">
    <a href="/manual/vote-note.php?id=121700&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121700">
    <a href="/manual/vote-note.php?id=121700&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121700" title="100% like this...">
    3
    </div>
  </div>
  <a href="#121700" class="name">
  <strong class="user"><em>jeboy</em></strong></a><a class="genanchor" href="#121700"> &para;</a><div class="date" title="2017-09-28 02:57"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121700">
<div class="phpcode"><code><span class="html">LIBXML_HTML_NOIMPLIED doesn't work on PHP 7.1.9 with libxml2-2.7.8</span></code></div>
  </div>
 </div>
  <div class="note" id="119813">  <div class="votes">
    <div id="Vu119813">
    <a href="/manual/vote-note.php?id=119813&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119813">
    <a href="/manual/vote-note.php?id=119813&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119813" title="85% like this...">
    10
    </div>
  </div>
  <a href="#119813" class="name">
  <strong class="user"><em>contact at cathexis dot de</em></strong></a><a class="genanchor" href="#119813"> &para;</a><div class="date" title="2016-08-31 10:41"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119813">
<div class="phpcode"><code><span class="html">If you load HTML from a string ensure the charset is set.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">...<br /></span><span class="default">$html_src </span><span class="keyword">= </span><span class="string">'&lt;html&gt;&lt;head&gt;&lt;meta content="text/html; charset=utf-8" http-equiv="Content-Type"&gt;&lt;/head&gt;&lt;body&gt;'</span><span class="keyword">;<br /></span><span class="default">$html_src </span><span class="keyword">.= </span><span class="string">'...'</span><span class="keyword">;<br />...<br /></span><span class="default">?&gt;</span> <br /><br />Otherwise the charset will be ISO-8859-1!</span></code></div>
  </div>
 </div>
  <div class="note" id="90853">  <div class="votes">
    <div id="Vu90853">
    <a href="/manual/vote-note.php?id=90853&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90853">
    <a href="/manual/vote-note.php?id=90853&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90853" title="75% like this...">
    2
    </div>
  </div>
  <a href="#90853" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#90853"> &para;</a><div class="date" title="2009-05-12 07:35"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90853">
<div class="phpcode"><code><span class="html">To avoid script tags from being output as &lt;script /&gt;, you can use the DOMDocumentFragment class:<br /><br /><span class="default">&lt;?php<br /><br />$doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$doc </span><span class="keyword">-&gt; </span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$xmlstring</span><span class="keyword">);<br /></span><span class="default">$fragment </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createDocumentFragment</span><span class="keyword">();<br /></span><span class="comment">/* Append the script element to the fragment using raw XML strings (will be preserved in their raw form) and if succesful proceed to insert it in the DOM tree */ <br /></span><span class="keyword">if(</span><span class="default">$fragment</span><span class="keyword">-&gt;</span><span class="default">appendXML</span><span class="keyword">(</span><span class="string">"&lt;script type='text/javascript' src='</span><span class="default">$source</span><span class="string">'&gt;&lt;/script&gt;"</span><span class="keyword">) { <br />  </span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DOMXpath</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">);<br />  </span><span class="default">$resultlist </span><span class="keyword">= </span><span class="default">$xpath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//*[local-name() = 'html']/*[local-name() = 'head']"</span><span class="keyword">); </span><span class="comment">/* namespace-safe method to find all head elements which are childs of the html element, should only return 1 match */<br />  </span><span class="keyword">foreach(</span><span class="default">$resultlist </span><span class="keyword">as </span><span class="default">$headnode</span><span class="keyword">)  </span><span class="comment">// insert the script tag<br />     </span><span class="default">$headnode</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$fragment</span><span class="keyword">);<br />}<br /></span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(); </span><span class="comment">/* and our script tags will still be &lt;script&gt;&lt;/script&gt; */<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="96116">  <div class="votes">
    <div id="Vu96116">
    <a href="/manual/vote-note.php?id=96116&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96116">
    <a href="/manual/vote-note.php?id=96116&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96116" title="57% like this...">
    1
    </div>
  </div>
  <a href="#96116" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#96116"> &para;</a><div class="date" title="2010-02-09 07:52"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96116">
<div class="phpcode"><code><span class="html">If you want a simpler way to get around the &lt;script&gt; tag problem try:<br /><br /><span class="default">&lt;?php<br /><br />  $script </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement </span><span class="keyword">(</span><span class="string">'script'</span><span class="keyword">);\<br />  </span><span class="comment">// Creating an empty text node forces &lt;script&gt;&lt;/script&gt;<br />  </span><span class="default">$script</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode </span><span class="keyword">(</span><span class="string">''</span><span class="keyword">));<br />  </span><span class="default">$head</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(</span><span class="default">$script</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="118469">  <div class="votes">
    <div id="Vu118469">
    <a href="/manual/vote-note.php?id=118469&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118469">
    <a href="/manual/vote-note.php?id=118469&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118469" title="50% like this...">
    0
    </div>
  </div>
  <a href="#118469" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118469"> &para;</a><div class="date" title="2015-12-11 03:38"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom118469">
<div class="phpcode"><code><span class="html">To solve the script tag problem just add an empty text node to the script node and DOMDocument will render &lt;script src="your.js"&gt;&lt;/script&gt; nicely.</span></code></div>
  </div>
 </div>
  <div class="note" id="79319">  <div class="votes">
    <div id="Vu79319">
    <a href="/manual/vote-note.php?id=79319&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79319">
    <a href="/manual/vote-note.php?id=79319&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79319" title="100% like this...">
    2
    </div>
  </div>
  <a href="#79319" class="name">
  <strong class="user"><em>xoplqox</em></strong></a><a class="genanchor" href="#79319"> &para;</a><div class="date" title="2007-11-20 11:07"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79319">
<div class="phpcode"><code><span class="html">XHTML:<br /><br />If the output is XHTML use the function saveXML().<br /><br />Output example for saveHTML:<br /><br />&lt;select name="pet" size="3" multiple&gt;<br />    &lt;option selected&gt;mouse&lt;/option&gt;<br />    &lt;option&gt;bird&lt;/option&gt;<br />    &lt;option&gt;cat&lt;/option&gt;<br />&lt;/select&gt;<br /><br />XHTML conform output using saveXML:<br /><br />&lt;select name="pet" size="3" multiple="multiple"&gt;<br />    &lt;option selected="selected"&gt;mouse&lt;/option&gt;<br />    &lt;option&gt;bird&lt;/option&gt;<br />    &lt;option&gt;cat&lt;/option&gt;<br />&lt;/select&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="79444">  <div class="votes">
    <div id="Vu79444">
    <a href="/manual/vote-note.php?id=79444&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79444">
    <a href="/manual/vote-note.php?id=79444&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79444" title="100% like this...">
    1
    </div>
  </div>
  <a href="#79444" class="name">
  <strong class="user"><em>archanglmr at yahoo dot com</em></strong></a><a class="genanchor" href="#79444"> &para;</a><div class="date" title="2007-11-27 03:28"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79444">
<div class="phpcode"><code><span class="html">If created your DOMDocument object using loadHTML() (where the source is from another site) and want to pass your changes back to the browser you should make sure the HTTP Content-Type header matches your meta content-type tags value because modern browsers seem to ignore the meta tag and trust just the HTTP header. For example if you're reading an ISO-8859-1 document and your web server is claiming UTF-8 you need to correct it using the header() function.<br /><br /><span class="default">&lt;?php<br />header</span><span class="keyword">(</span><span class="string">'Content-Type: text/html; charset=iso-8859-1'</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="52139">  <div class="votes">
    <div id="Vu52139">
    <a href="/manual/vote-note.php?id=52139&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd52139">
    <a href="/manual/vote-note.php?id=52139&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V52139" title="50% like this...">
    0
    </div>
  </div>
  <a href="#52139" class="name">
  <strong class="user"><em>tyson at clugg dot net</em></strong></a><a class="genanchor" href="#52139"> &para;</a><div class="date" title="2005-04-21 05:44"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom52139">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /></span><span class="comment">// Using DOM to fix sloppy HTML.<br />// An example by Tyson Clugg &lt;tyson@clugg.net&gt;<br />//<br />// vim: syntax=php expandtab tabstop=2<br /><br /></span><span class="keyword">function </span><span class="default">tidyHTML</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">)<br />{<br />  </span><span class="comment">// load our document into a DOM object<br />  </span><span class="default">$dom </span><span class="keyword">= @</span><span class="default">DOMDocument</span><span class="keyword">::</span><span class="default">loadHTML</span><span class="keyword">(</span><span class="default">$buffer</span><span class="keyword">);<br />  </span><span class="comment">// we want nice output<br />  </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br />  return(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveHTML</span><span class="keyword">());<br />}<br /><br /></span><span class="comment">// start output buffering, using our nice<br />// callback funtion to format the output.<br /></span><span class="default">ob_start</span><span class="keyword">(</span><span class="string">"tidyHTML"</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span>&lt;html&gt;<br />&lt;p&gt;It's like comparing apples to oranges.<br />&lt;/html&gt;<br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// this will be called implicitly, but we'll<br />// call it manually to illustrate the point.<br /></span><span class="default">ob_end_flush</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;<br /></span><br />The above code takes out sloppy HTML:<br /> &lt;html&gt;<br /> &lt;p&gt;It's like comparing apples to oranges.<br /> &lt;/html&gt;<br /><br />And cleans it up to the following:<br /> &lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "<a href="http://www.w3.org/TR/REC-html40/loose.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/REC-html40/loose.dtd</a>"&gt;<br /> &lt;html&gt;&lt;body&gt;&lt;p&gt;It's like comparing apples to oranges.<br /> &lt;/p&gt;&lt;/body&gt;&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="82800">  <div class="votes">
    <div id="Vu82800">
    <a href="/manual/vote-note.php?id=82800&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd82800">
    <a href="/manual/vote-note.php?id=82800&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V82800" title="40% like this...">
    -3
    </div>
  </div>
  <a href="#82800" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#82800"> &para;</a><div class="date" title="2008-04-25 08:15"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom82800">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php
<br /></span><span class="keyword">function </span><span class="default">getDOMString</span><span class="keyword">(</span><span class="default">$retNode</span><span class="keyword">) {
<br />  if (!</span><span class="default">$retNode</span><span class="keyword">) return </span><span class="default">null</span><span class="keyword">;
<br />  </span><span class="default">$retval </span><span class="keyword">= </span><span class="default">strtr</span><span class="keyword">(</span><span class="default">$retNode</span><span class="keyword">--&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$retNode</span><span class="keyword">),
<br />  array(
<br />    </span><span class="string">'&gt;&lt;/area&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/base&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/basefont&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/br&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/col&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/frame&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/hr&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/img&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/input&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/isindex&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/link&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/meta&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'&gt;&lt;/param&gt;' </span><span class="keyword">=&gt; </span><span class="string">' /&gt;'</span><span class="keyword">,
<br />    </span><span class="string">'default:' </span><span class="keyword">=&gt; </span><span class="string">''</span><span class="keyword">, 
<br />    </span><span class="comment">// sometimes, you have to decode entities too...
<br />    </span><span class="string">'&amp;quot;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#34;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;amp;' </span><span class="keyword">=&gt;  </span><span class="string">'&amp;#38;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;apos;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#39;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;lt;' </span><span class="keyword">=&gt;   </span><span class="string">'&amp;#60;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;gt;' </span><span class="keyword">=&gt;   </span><span class="string">'&amp;#62;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;nbsp;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#160;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;copy;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#169;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;laquo;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#171;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;reg;' </span><span class="keyword">=&gt;   </span><span class="string">'&amp;#174;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;raquo;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#187;'</span><span class="keyword">,
<br />    </span><span class="string">'&amp;trade;' </span><span class="keyword">=&gt; </span><span class="string">'&amp;#8482;'
<br />  </span><span class="keyword">));
<br />  return </span><span class="default">$retval</span><span class="keyword">;
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="116117">  <div class="votes">
    <div id="Vu116117">
    <a href="/manual/vote-note.php?id=116117&amp;page=domdocument.savehtml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116117">
    <a href="/manual/vote-note.php?id=116117&amp;page=domdocument.savehtml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116117" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#116117" class="name">
  <strong class="user"><em>qrworld.net</em></strong></a><a class="genanchor" href="#116117"> &para;</a><div class="date" title="2014-11-11 04:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116117">
<div class="phpcode"><code><span class="html">In this post <a href="http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html" rel="nofollow" target="_blank">http://softontherocks.blogspot.com/2014/11/descargar-el-contenido-de-una-url_11.html</a> I found a simple way to get the content of a URL with DOMDocument, loadHTMLFile and saveHTML().<br /><br />function getURLContent($url){<br />    $doc = new DOMDocument;<br />    $doc-&gt;preserveWhiteSpace = FALSE;<br />    @$doc-&gt;loadHTMLFile($url);<br />    return $doc-&gt;saveHTML();<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.savehtml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.savehtml.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.domdocument.php">DOMDocument</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="domdocument.adoptnode.php" title="adoptNode">adoptNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.append.php" title="append">append</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattribute.php" title="createAttribute">createAttribute</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createattributens.php" title="createAttributeNS">createAttributeNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcdatasection.php" title="createCDATASection">createCDATASection</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createcomment.php" title="createComment">createComment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createdocumentfragment.php" title="createDocumentFragment">createDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelement.php" title="createElement">createElement</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createelementns.php" title="createElementNS">createElementNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createentityreference.php" title="createEntityReference">createEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createprocessinginstruction.php" title="createProcessingInstruction">createProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.createtextnode.php" title="createTextNode">createTextNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementbyid.php" title="getElementById">getElementById</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagname.php" title="getElementsByTagName">getElementsByTagName</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.getelementsbytagnamens.php" title="getElementsByTagNameNS">getElementsByTagNameNS</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.importnode.php" title="importNode">importNode</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.load.php" title="load">load</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtml.php" title="loadHTML">loadHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadhtmlfile.php" title="loadHTMLFile">loadHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.loadxml.php" title="loadXML">loadXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.normalizedocument.php" title="normalizeDocument">normalizeDocument</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.prepend.php" title="prepend">prepend</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.registernodeclass.php" title="registerNodeClass">registerNodeClass</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidate.php" title="relaxNGValidate">relaxNGValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.relaxngvalidatesource.php" title="relaxNGValidateSource">relaxNGValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.replacechildren.php" title="replaceChildren">replaceChildren</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.save.php" title="save">save</a>
                        </li>
                                                <li class="current">
                            <a href="domdocument.savehtml.php" title="saveHTML">saveHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtmlfile.php" title="saveHTMLFile">saveHTMLFile</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidate.php" title="schemaValidate">schemaValidate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.schemavalidatesource.php" title="schemaValidateSource">schemaValidateSource</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.validate.php" title="validate">validate</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.xinclude.php" title="xinclude">xinclude</a>
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
