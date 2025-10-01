<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::loadXML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.loadxml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.loadxml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadxml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.loadhtmlfile.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.normalizedocument.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.loadxml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.loadxml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.loadxml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.loadxml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.loadxml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.loadxml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.loadxml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.loadxml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.loadxml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.loadxml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.loadxml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Load XML from a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::loadXML - Manual" />
<meta name="twitter:description" content="Load XML from a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::loadXML - Manual" />
<meta itemprop="description" content="Load XML from a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Load XML from a string" />

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
        <a href="domdocument.normalizedocument.php">
          DOMDocument::normalizeDocument &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.loadhtmlfile.php">
          &laquo; DOMDocument::loadHTMLFile        </a>
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
            <option value='en/domdocument.loadxml.php' selected="selected">English</option>
            <option value='de/domdocument.loadxml.php'>German</option>
            <option value='es/domdocument.loadxml.php'>Spanish</option>
            <option value='fr/domdocument.loadxml.php'>French</option>
            <option value='it/domdocument.loadxml.php'>Italian</option>
            <option value='ja/domdocument.loadxml.php'>Japanese</option>
            <option value='pt_BR/domdocument.loadxml.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.loadxml.php'>Russian</option>
            <option value='tr/domdocument.loadxml.php'>Turkish</option>
            <option value='uk/domdocument.loadxml.php'>Ukrainian</option>
            <option value='zh/domdocument.loadxml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.loadxml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::loadXML</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::loadXML</span> &mdash; <span class="dc-title">
   Load XML from a string
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.loadxml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::loadXML</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$source</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Loads an XML document from a string. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.loadxml-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">source</code></dt>
     <dd>
      <p class="para">
       The string containing the XML.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       <a href="language.operators.bitwise.php" class="link">Bitwise <code class="literal">OR</code></a>
       of the <a href="libxml.constants.php" class="link">libxml option constants</a>.
      </p>
     </dd>
    

   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.loadxml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.loadxml-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   If an empty string is passed as the <code class="parameter">source</code>,
   a warning will be generated. This warning is not generated by libxml
   and cannot be handled using libxml&#039;s error handling functions.
  </p>
 </div>

 <div class="refsect1 changelog" id="refsect1-domdocument.loadxml-changelog">
  <h3 class="title">Changelog</h3>
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
       This function now has a tentative <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> return type.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       Calling this function statically will
       now throw an <span class="classname"><a href="class.error.php" class="classname">Error</a></span>.
       Previously, an <strong><code><a href="errorfunc.constants.php#constant.e-deprecated">E_DEPRECATED</a></code></strong> was raised.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-domdocument.loadxml-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5778">
    <p><strong>Example #1 Creating a Document</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">loadXML</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;root&gt;&lt;node/&gt;&lt;/root&gt;'</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.loadxml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.load.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::load()</a> - Load XML from a file</span></li>
    <li><span class="methodname"><a href="domdocument.save.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::save()</a> - Dumps the internal XML tree back into a file</span></li>
    <li><span class="methodname"><a href="domdocument.savexml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::saveXML()</a> - Dumps the internal XML tree back into a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/loadxml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.loadxml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.loadxml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadxml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">11 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113676">  <div class="votes">
    <div id="Vu113676">
    <a href="/manual/vote-note.php?id=113676&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113676">
    <a href="/manual/vote-note.php?id=113676&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113676" title="81% like this...">
    47
    </div>
  </div>
  <a href="#113676" class="name">
  <strong class="user"><em>Gustavo L. Fabro</em></strong></a><a class="genanchor" href="#113676"> &para;</a><div class="date" title="2013-11-14 04:41"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113676">
<div class="phpcode"><code><span class="html">Always remember that with the default parameters this function doesn't handle well large files, i.e. if a text node is longer than 10Mb it can raise an exception stating:<br /><br />DOMDocument::loadXML(): internal error Extra content at the end of the document in Entity<br /><br />even though the XML is fine.<br /><br />The cause is a definition in parserInternals.h of lixml:<br />#define XML_MAX_TEXT_LENGTH 10000000<br /><br />To allow the function to process larger files, pass the LIBXML_PARSEHUGE as an option and it will work just fine:<br /><br />$domDocument-&gt;loadXML($xml, LIBXML_PARSEHUGE);</span></code></div>
  </div>
 </div>
  <div class="note" id="76015">  <div class="votes">
    <div id="Vu76015">
    <a href="/manual/vote-note.php?id=76015&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76015">
    <a href="/manual/vote-note.php?id=76015&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76015" title="100% like this...">
    4
    </div>
  </div>
  <a href="#76015" class="name">
  <strong class="user"><em>Stuart Grimshaw</em></strong></a><a class="genanchor" href="#76015"> &para;</a><div class="date" title="2007-06-26 01:57"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76015">
<div class="phpcode"><code><span class="html">Possible values for the options parameter can be found here:<br /><br /><a href="http://us3.php.net/manual/en/ref.libxml.php#libxml.constants" rel="nofollow" target="_blank">http://us3.php.net/manual/en/ref.libxml.php#libxml.constants</a></span></code></div>
  </div>
 </div>
  <div class="note" id="69295">  <div class="votes">
    <div id="Vu69295">
    <a href="/manual/vote-note.php?id=69295&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd69295">
    <a href="/manual/vote-note.php?id=69295&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V69295" title="80% like this...">
    15
    </div>
  </div>
  <a href="#69295" class="name">
  <strong class="user"><em>Gavin Sinai gsinai at gmx dot net</em></strong></a><a class="genanchor" href="#69295"> &para;</a><div class="date" title="2006-08-30 07:34"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom69295">
<div class="phpcode"><code><span class="html">loadXml reports an error instead of throwing an exception when the xml is not well formed. This is annoying if you are trying to to loadXml() in a try...catch statement. Apparently its a feature, not a bug, because this conforms to a spefication. <br /><br />If you want to catch an exception instead of generating a report, you could do something like<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">HandleXmlError</span><span class="keyword">(</span><span class="default">$errno</span><span class="keyword">, </span><span class="default">$errstr</span><span class="keyword">, </span><span class="default">$errfile</span><span class="keyword">, </span><span class="default">$errline</span><span class="keyword">)<br />{<br />    if (</span><span class="default">$errno</span><span class="keyword">==</span><span class="default">E_WARNING </span><span class="keyword">&amp;&amp; (</span><span class="default">substr_count</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">,</span><span class="string">"DOMDocument::loadXML()"</span><span class="keyword">)&gt;</span><span class="default">0</span><span class="keyword">))<br />    {<br />        throw new </span><span class="default">DOMException</span><span class="keyword">(</span><span class="default">$errstr</span><span class="keyword">);<br />    }<br />    else <br />        return </span><span class="default">false</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">XmlLoader</span><span class="keyword">(</span><span class="default">$strXml</span><span class="keyword">)<br />{<br />    </span><span class="default">set_error_handler</span><span class="keyword">(</span><span class="string">'HandleXmlError'</span><span class="keyword">);<br />    </span><span class="default">$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXml</span><span class="keyword">(</span><span class="default">$strXml</span><span class="keyword">);    <br />    </span><span class="default">restore_error_handler</span><span class="keyword">();<br />    return </span><span class="default">$dom</span><span class="keyword">;<br /> }<br /><br /></span><span class="default">?&gt;<br /></span><br />Returning false in function HandleXmlError() causes a fallback to the default error handler.</span></code></div>
  </div>
 </div>
  <div class="note" id="124390">  <div class="votes">
    <div id="Vu124390">
    <a href="/manual/vote-note.php?id=124390&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124390">
    <a href="/manual/vote-note.php?id=124390&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124390" title="83% like this...">
    8
    </div>
  </div>
  <a href="#124390" class="name">
  <strong class="user"><em>Adrian Wiik</em></strong></a><a class="genanchor" href="#124390"> &para;</a><div class="date" title="2019-11-13 09:02"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124390">
<div class="phpcode"><code><span class="html">A call to loadXML() will overwrite the XML declaration previously created in the constructor of DOMDocument. This can cause encoding problems if there is no XML declaration in the loaded XML and you don't have control over the source (e.g. if the XML is coming from a webservice). To fix this, set encoding AFTER loading the XML using the 'encoding' class property of DOMDocument. Example:<br /><br />Bad situation:<br /><br />test.xml:<br />&lt;test&gt;<br />    &lt;hello&gt;hi&lt;/hello&gt;<br />    &lt;field&gt;ø&lt;/field&gt;<br />&lt;/test&gt;<br /><br />test.php:<br />$xmlDoc = new DOMDocument("1.0", "utf-8"); // Parameters here are overwritten anyway when using loadXML(), and are not really relevant<br />$testXML = file_get_contents("test.xml");<br />$xmlDoc-&gt;loadXML($testXML);<br />// Print the contents to a file or in a log function to get the output, using $xmlDoc-&gt;saveXML()<br /><br />Output:<br />&lt;?xml version="1.0"?&gt;<br />&lt;test&gt;<br />    &lt;hello&gt;hi&lt;/hello&gt;<br />    &lt;field&gt;&amp;#xF8;&lt;/field&gt;<br />&lt;/test&gt;<br /><br />Good situation:<br /><br />test.xml:<br />&lt;test&gt;<br />    &lt;hello&gt;hi&lt;/hello&gt;<br />    &lt;field&gt;ø&lt;/field&gt;<br />&lt;/test&gt;<br /><br />test.php:<br />$xmlDoc = new DOMDocument("1.0", "utf-8"); // Parameters here are overwritten anyway when using loadXML(), and are not really relevant<br />$testXML = file_get_contents("test.xml");<br />$xmlDoc-&gt;loadXML($testXML);<br />$xmlDoc-&gt;encoding = "utf-8";<br />// Print the contents to a file or in a log function to get the output, using $xmlDoc-&gt;saveXML()<br /><br />Output:<br />&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;test&gt;<br />    &lt;hello&gt;hi&lt;/hello&gt;<br />    &lt;field&gt;ø&lt;/field&gt;<br />&lt;/test&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="73933">  <div class="votes">
    <div id="Vu73933">
    <a href="/manual/vote-note.php?id=73933&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73933">
    <a href="/manual/vote-note.php?id=73933&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73933" title="75% like this...">
    6
    </div>
  </div>
  <a href="#73933" class="name">
  <strong class="user"><em>shaoyu73 at gmail dot com</em></strong></a><a class="genanchor" href="#73933"> &para;</a><div class="date" title="2007-03-15 08:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73933">
<div class="phpcode"><code><span class="html">earth at anonymous dot com,<br /><br />preserveWhiteSpace property needs to be set to false for formatOutput to work properly, for some reason.<br /><br />$dom = new DOMDocument;<br />$dom-&gt;preserveWhiteSpace = false;<br />$dom-&gt;loadXML($xmlStr);<br />...<br />$element-&gt;appendChild(...);<br />...<br />$dom-&gt;formatOutput = true;<br />$xmlStr = $dom-&gt;saveXML();<br />echo $xmlStr;<br /><br />This would format the output nicely.</span></code></div>
  </div>
 </div>
  <div class="note" id="75837">  <div class="votes">
    <div id="Vu75837">
    <a href="/manual/vote-note.php?id=75837&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75837">
    <a href="/manual/vote-note.php?id=75837&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75837" title="75% like this...">
    2
    </div>
  </div>
  <a href="#75837" class="name">
  <strong class="user"><em>Marc Liyanage</em></strong></a><a class="genanchor" href="#75837"> &para;</a><div class="date" title="2007-06-18 07:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75837">
<div class="phpcode"><code><span class="html">The documentation states that loadXML can be called statically, but this is misleading. This feature seems to be a special case hack and its use seems to be discouraged according to <a href="http://bugs.php.net/bug.php?id=41398." rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=41398.</a><br /><br />Calling the method statically will fail with an error if the code runs with E_STRICT error reporting enabled.<br /><br />The documentation should be changed to make it clear that a static call is against recommended practice and won't work with E_STRICT.</span></code></div>
  </div>
 </div>
  <div class="note" id="64319">  <div class="votes">
    <div id="Vu64319">
    <a href="/manual/vote-note.php?id=64319&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64319">
    <a href="/manual/vote-note.php?id=64319&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64319" title="75% like this...">
    2
    </div>
  </div>
  <a href="#64319" class="name">
  <strong class="user"><em>earth at anonymous dot com</em></strong></a><a class="genanchor" href="#64319"> &para;</a><div class="date" title="2006-04-12 02:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64319">
<div class="phpcode"><code><span class="html">Note that loadXML crops off beginning and trailing whitespace and linebreaks.<br /><br />When using loadXML and appendChild to add a chunk of XML to an existing document, you may want to force a linebreak between the end of the XML chunk and the next line (usually a close tag) in the output file:<br /><br />$childDocument = new DOMDocument;<br />$childDocument&gt;preserveWhiteSpace = true;<br />$childDocument-&gt;loadXML(..XML-Chunk..);<br />$mNewNode = $mainDOcument-&gt;importNode($childDocument-&gt;documentElement, true);<br />$ParentNode-&gt;appendChild($mNewNode);<br />$ParentNode-&gt;appendChild($mainDocument-&gt;createTextNode("\\n  ");<br /><br />Although it is said that DOM should not be used to make 'pretty' XML output, it is something I struggled with to get something that was readable for testing.  Another solution is to use the createDocumentFragment()-&gt;appendXML(..XML-Chunk..) instead, which seems not to trim off linebreaks like DOMDocument-&gt;loadXML() does.</span></code></div>
  </div>
 </div>
  <div class="note" id="81976">  <div class="votes">
    <div id="Vu81976">
    <a href="/manual/vote-note.php?id=81976&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81976">
    <a href="/manual/vote-note.php?id=81976&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81976" title="66% like this...">
    3
    </div>
  </div>
  <a href="#81976" class="name">
  <strong class="user"><em>olalonde at NOSPAM dot gmail dot com</em></strong></a><a class="genanchor" href="#81976"> &para;</a><div class="date" title="2008-03-21 05:00"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81976">
<div class="phpcode"><code><span class="html">For some reason, when you set DOMDocument's property 'recover' to true, using '@' to mask errors thrown by loadXml() won't work.<br /><br />Here's my workaround:<br /><br />function maskErrors() {}<br />set_error_handler('maskErrors');<br />$dom-&gt;loadXml($xml);<br />restore_error_handler();<br /><br />You could also simply do this: error_reporting(0); and then set back error_reporting to its original state.</span></code></div>
  </div>
 </div>
  <div class="note" id="74848">  <div class="votes">
    <div id="Vu74848">
    <a href="/manual/vote-note.php?id=74848&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74848">
    <a href="/manual/vote-note.php?id=74848&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74848" title="66% like this...">
    3
    </div>
  </div>
  <a href="#74848" class="name">
  <strong class="user"><em>jazzslider at hotmail dot com</em></strong></a><a class="genanchor" href="#74848"> &para;</a><div class="date" title="2007-04-30 01:14"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74848">
<div class="phpcode"><code><span class="html">When using loadXML() to parse a string that contains entity references (e.g., &amp;nbsp;), be sure that those entity references are properly declared through the use of a DOCTYPE declaration; otherwise, loadXML() will not be able to interpret the string.<br /><br />Example:<br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="iso-8859-1"?&gt;<br />&lt;div&gt;This&amp;nbsp;is a non-breaking space.&lt;/div&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$dd1 </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dd1</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />echo </span><span class="default">$dd1</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Given the above code, PHP will issue a Warning about the entity 'nbsp' not being properly declared.  Also, the call to saveXML() will return nothing but a trimmed-down version of the original processing instruction...everything else is gone, and all because of the undeclared entity.<br /><br />Instead, explicitly declare the entity first:<br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="iso-8859-1"?&gt;<br />&lt;!DOCTYPE root [<br />&lt;!ENTITY nbsp "&amp;#160;"&gt;<br />]&gt;<br />&lt;div&gt;This&amp;nbsp;is a non-breaking space.&lt;/div&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$dd2 </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dd2</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />echo </span><span class="default">$dd2</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />Since the 'nbsp' entity is defined in the DOCTYPE, PHP no longer issues that Warning; the string is now well-formed, and loadXML() understands it perfectly.<br /><br />You can also use references to external DTDs in the same way (e.g., &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"<br />"<a href="http://www.w3.org/TR/html4/strict.dtd" rel="nofollow" target="_blank">http://www.w3.org/TR/html4/strict.dtd</a>"&gt;), which is particularly important if you need to do this for many different documents with many different possible entities.<br /><br />Also, as a sidenote...entity references created by createEntityReference() do not need this kind of explicit declaration.</span></code></div>
  </div>
 </div>
  <div class="note" id="89212">  <div class="votes">
    <div id="Vu89212">
    <a href="/manual/vote-note.php?id=89212&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89212">
    <a href="/manual/vote-note.php?id=89212&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89212" title="58% like this...">
    2
    </div>
  </div>
  <a href="#89212" class="name">
  <strong class="user"><em>remacg</em></strong></a><a class="genanchor" href="#89212"> &para;</a><div class="date" title="2009-02-26 07:33"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89212">
<div class="phpcode"><code><span class="html">Instead of doing this:<br /><br /><span class="default">&lt;?php<br />$str </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0" encoding="iso-8859-1"?&gt;<br />&lt;!DOCTYPE root [<br />&lt;!ENTITY nbsp "&amp;#160;"&gt;<br />]&gt;<br />&lt;div&gt;This&amp;nbsp;is a non-breaking space.&lt;/div&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$dd2 </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$dd2</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$str</span><span class="keyword">);<br /><br />echo </span><span class="default">$dd2</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />simply use:<br /><br />loadHTML() rather than loadXML().</span></code></div>
  </div>
 </div>
  <div class="note" id="68713">  <div class="votes">
    <div id="Vu68713">
    <a href="/manual/vote-note.php?id=68713&amp;page=domdocument.loadxml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68713">
    <a href="/manual/vote-note.php?id=68713&amp;page=domdocument.loadxml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68713" title="100% like this...">
    2
    </div>
  </div>
  <a href="#68713" class="name">
  <strong class="user"><em>mp at webfactory dot de</em></strong></a><a class="genanchor" href="#68713"> &para;</a><div class="date" title="2006-08-08 08:26"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68713">
<div class="phpcode"><code><span class="html">While loadXML() expects its input to have a leading XML processing instruction to deduce the encoding used, there's no such concept in (non-XML) HTML documents. Thus, the libxml library underlying the DOM functions peeks at the &lt;META&gt; tags to figure out the encoding used.<br /><br />See <a href="http://xmlsoft.org/encoding.html." rel="nofollow" target="_blank">http://xmlsoft.org/encoding.html.</a></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.loadxml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.loadxml.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
                                                <li class="">
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
