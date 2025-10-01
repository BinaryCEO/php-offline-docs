<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::saveXML - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.savexml.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.savexml.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.savexml.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.savehtmlfile.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.schemavalidate.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.savexml.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.savexml.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.savexml.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.savexml.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.savexml.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.savexml.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.savexml.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.savexml.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.savexml.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.savexml.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.savexml.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Dumps the internal XML tree back into a string" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::saveXML - Manual" />
<meta name="twitter:description" content="Dumps the internal XML tree back into a string" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::saveXML - Manual" />
<meta itemprop="description" content="Dumps the internal XML tree back into a string" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Dumps the internal XML tree back into a string" />

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
        <a href="domdocument.schemavalidate.php">
          DOMDocument::schemaValidate &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.savehtmlfile.php">
          &laquo; DOMDocument::saveHTMLFile        </a>
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
            <option value='en/domdocument.savexml.php' selected="selected">English</option>
            <option value='de/domdocument.savexml.php'>German</option>
            <option value='es/domdocument.savexml.php'>Spanish</option>
            <option value='fr/domdocument.savexml.php'>French</option>
            <option value='it/domdocument.savexml.php'>Italian</option>
            <option value='ja/domdocument.savexml.php'>Japanese</option>
            <option value='pt_BR/domdocument.savexml.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.savexml.php'>Russian</option>
            <option value='tr/domdocument.savexml.php'>Turkish</option>
            <option value='uk/domdocument.savexml.php'>Ukrainian</option>
            <option value='zh/domdocument.savexml.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.savexml" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::saveXML</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::saveXML</span> &mdash; <span class="dc-title">
   Dumps the internal XML tree back into a string
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.savexml-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::saveXML</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.domnode.php" class="type DOMNode">DOMNode</a></span></span> <code class="parameter">$node</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>): <span class="type"><span class="type"><a href="language.types.string.php" class="type string">string</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Creates an XML document from the DOM representation. This function is usually 
   called after building a new dom document from scratch as in the example below. 
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-domdocument.savexml-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">node</code></dt>
     <dd>
      <p class="para">
       Use this parameter to output only a specific node without XML declaration
       rather than the entire document.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <span class="simpara">
 Additional Options.
 The <strong><code><a href="libxml.constants.php#constant.libxml-noemptytag">LIBXML_NOEMPTYTAG</a></code></strong>
 and <strong><code><a href="libxml.constants.php#constant.libxml-noxmldecl">LIBXML_NOXMLDECL</a></code></strong> options are supported.
 Prior to PHP 8.3.0, only the <strong><code><a href="libxml.constants.php#constant.libxml-noemptytag">LIBXML_NOEMPTYTAG</a></code></strong>
 option is supported.
</span>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-domdocument.savexml-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the XML, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if an error occurred.
  </p>
 </div>

 <div class="refsect1 errors" id="refsect1-domdocument.savexml-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   <dl>
    
     <dt><strong><code><a href="dom.constants.php#constant.dom-wrong-document-err">DOM_WRONG_DOCUMENT_ERR</a></code></strong></dt>
     <dd>
      <p class="para">
       Raised if <code class="parameter">node</code> is from another document.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-domdocument.savexml-changelog">
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
       <a href="libxml.constants.php" class="link">LIBXML_NOXMLDECL</a> is now supported.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-domdocument.savexml-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5788">
    <p><strong>Example #1 Saving a DOM tree into a string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$doc </span><span style="color: #007700">= new </span><span style="color: #0000BB">DOMDocument</span><span style="color: #007700">(</span><span style="color: #DD0000">'1.0'</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">// we want a nice output<br /></span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">formatOutput </span><span style="color: #007700">= </span><span style="color: #0000BB">true</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'book'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$root </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$root</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$title </span><span style="color: #007700">= </span><span style="color: #0000BB">$root</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">createTextNode</span><span style="color: #007700">(</span><span style="color: #DD0000">'This is the title'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$text </span><span style="color: #007700">= </span><span style="color: #0000BB">$title</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">appendChild</span><span style="color: #007700">(</span><span style="color: #0000BB">$text</span><span style="color: #007700">);<br /><br />echo </span><span style="color: #DD0000">"Saving all the document:\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br />echo </span><span style="color: #DD0000">"Saving only the title part:\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">saveXML</span><span style="color: #007700">(</span><span style="color: #0000BB">$title</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">Saving all the document:
&lt;?xml version=&quot;1.0&quot;?&gt;
&lt;book&gt;
  &lt;title&gt;This is the title&lt;/title&gt;
&lt;/book&gt;

Saving only the title part:
&lt;title&gt;This is the title&lt;/title&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-domdocument.savexml-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.save.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::save()</a> - Dumps the internal XML tree back into a file</span></li>
    <li><span class="methodname"><a href="domdocument.load.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::load()</a> - Load XML from a file</span></li>
    <li><span class="methodname"><a href="domdocument.loadxml.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::loadXML()</a> - Load XML from a string</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/savexml.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.savexml%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.savexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.savexml.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">16 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="68892">  <div class="votes">
    <div id="Vu68892">
    <a href="/manual/vote-note.php?id=68892&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd68892">
    <a href="/manual/vote-note.php?id=68892&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V68892" title="76% like this...">
    16
    </div>
  </div>
  <a href="#68892" class="name">
  <strong class="user"><em>devin at SPAMISBAD dot tritarget dot com</em></strong></a><a class="genanchor" href="#68892"> &para;</a><div class="date" title="2006-08-14 10:52"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom68892">
<div class="phpcode"><code><span class="html">It took some searching to figure this one out. I didn't see much in the way of explaining this glitch in the manual thus far. (For PHP5 I believe)<br /><br />formatOutput = true; appears to fail when the origin of the DOM came from a file via load(). EX:<br /><br /><span class="default">&lt;?php<br />    $dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load </span><span class="keyword">(</span><span class="string">"test.xml"</span><span class="keyword">);<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />    </span><span class="default">$new_tag </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement </span><span class="keyword">(</span><span class="string">'testNode'</span><span class="keyword">);<br />    </span><span class="default">$new_tag</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(<br />        </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement </span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'this is a test'</span><span class="keyword">));<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(</span><span class="default">$new_tag</span><span class="keyword">);<br /><br />    </span><span class="default">printf </span><span class="keyword">(</span><span class="string">"&lt;pre&gt;%s&lt;/pre&gt;"</span><span class="keyword">, </span><span class="default">htmlentities </span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">()));<br /></span><span class="default">?&gt;<br /></span><br />Will not indent the output and will display the modified nodes all in one long line. Makes for editing a config.xml a bit difficult when saving to a file.<br /><br />By adding the preserveWhiteSpace = false; BEFORE the load() the formatOutput works as expected. EX:<br /><br /><span class="default">&lt;?php<br />    $dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">preserveWhiteSpace </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">;<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load </span><span class="keyword">(</span><span class="string">"test.xml"</span><span class="keyword">);<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">formatOutput </span><span class="keyword">= </span><span class="default">true</span><span class="keyword">;<br /><br />    </span><span class="default">$new_tag </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement </span><span class="keyword">(</span><span class="string">'testNode'</span><span class="keyword">);<br />    </span><span class="default">$new_tag</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(<br />        </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement </span><span class="keyword">(</span><span class="string">'test'</span><span class="keyword">, </span><span class="string">'this is a test'</span><span class="keyword">));<br />    </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">appendChild </span><span class="keyword">(</span><span class="default">$new_tag</span><span class="keyword">);<br /><br />    </span><span class="default">printf </span><span class="keyword">(</span><span class="string">"&lt;pre&gt;%s&lt;/pre&gt;"</span><span class="keyword">, </span><span class="default">htmlentities </span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">()));<br /></span><span class="default">?&gt;<br /></span><br />CAUTION: If your loaded xml file (test.xml) has an empty root node that is not shortened or has no children this will NOT work.<br /><br />Example:<br /><br />DOES NOT WORK:<br />&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />&lt;/root&gt;<br /><br />WORKS:<br />&lt;?xml version="1.0"?&gt;<br />&lt;root/&gt;<br /><br />WORKS:<br />&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />  &lt;!-- comment --&gt;<br />&lt;/root&gt;<br /><br />WORKS:<br />&lt;?xml version="1.0"?&gt;<br />&lt;root&gt;<br />  &lt;child/&gt;<br />&lt;/root&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="88525">  <div class="votes">
    <div id="Vu88525">
    <a href="/manual/vote-note.php?id=88525&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd88525">
    <a href="/manual/vote-note.php?id=88525&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V88525" title="73% like this...">
    16
    </div>
  </div>
  <a href="#88525" class="name">
  <strong class="user"><em>vikramvmalhotra at hotmail dot com</em></strong></a><a class="genanchor" href="#88525"> &para;</a><div class="date" title="2009-01-27 03:49"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom88525">
<div class="phpcode"><code><span class="html">if you are storing multi-byte characters in XML, then saving the XML using saveXML() will create problems. It will spit out the characters converted in encoded format.
<br />
<br /><span class="default">&lt;?php
<br />$str </span><span class="keyword">= </span><span class="default">domdoc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(); </span><span class="comment">// gives "&amp;x#1245;" some encoded data
<br /></span><span class="default">?&gt;
<br /></span>
<br />Instead do the following
<br />
<br /><span class="default">&lt;?php
<br />$str </span><span class="keyword">= </span><span class="default">domdoc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">domdoc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">); </span><span class="comment">// gives "保存しました" correct multi-byte data
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123524">  <div class="votes">
    <div id="Vu123524">
    <a href="/manual/vote-note.php?id=123524&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123524">
    <a href="/manual/vote-note.php?id=123524&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123524" title="85% like this...">
    10
    </div>
  </div>
  <a href="#123524" class="name">
  <strong class="user"><em>liumenglei0211 at 163 dot com</em></strong></a><a class="genanchor" href="#123524"> &para;</a><div class="date" title="2019-01-17 07:50"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123524">
<div class="phpcode"><code><span class="html">How to display two tags when the node content is empty.<br /><br /><span class="default">&lt;?php<br />$dom     </span><span class="keyword">= new </span><span class="default">\DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br /></span><span class="default">$document </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'document'</span><span class="keyword">);<br /></span><span class="default">$document </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$document</span><span class="keyword">);<br /></span><span class="default">$head </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'title'</span><span class="keyword">,</span><span class="string">'this is title'</span><span class="keyword">);<br /></span><span class="default">$content </span><span class="keyword">= </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'content'</span><span class="keyword">,</span><span class="string">''</span><span class="keyword">);<br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$head</span><span class="keyword">);<br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$content</span><span class="keyword">);<br />echo </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />In XML, they are considered exactly the same thing, and any parser should recognize both forms.However, you can write it this way if you still need it<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">, </span><span class="default">LIBXML_NOEMPTYTAG</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />Example 1：<br /><br />&lt;?xml version="1.0"?&gt;<br />&lt;document&gt;<br />    &lt;title&gt;this is title&lt;/title&gt;<br />    &lt;content/&gt;<br />&lt;/document&gt;<br /><br />Example 2：<br />&lt;document&gt;<br />    &lt;title&gt;this is test&lt;/title&gt;<br />    &lt;content&gt;&lt;/content&gt;<br />&lt;/document&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="44422">  <div class="votes">
    <div id="Vu44422">
    <a href="/manual/vote-note.php?id=44422&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44422">
    <a href="/manual/vote-note.php?id=44422&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44422" title="73% like this...">
    7
    </div>
  </div>
  <a href="#44422" class="name">
  <strong class="user"><em>padys at tlen dot pl</em></strong></a><a class="genanchor" href="#44422"> &para;</a><div class="date" title="2004-08-05 07:36"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44422">
<div class="phpcode"><code><span class="html">When you save whole document:<br />DOMDocument-&gt;saveXML() produces string in encoding defined in property DOMDocument-&gt;encoding.<br /><br />When you save only one node:<br />DOMDocument-&gt;saveXML(DOMNode) produces always string in UTF-8.</span></code></div>
  </div>
 </div>
  <div class="note" id="45548">  <div class="votes">
    <div id="Vu45548">
    <a href="/manual/vote-note.php?id=45548&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd45548">
    <a href="/manual/vote-note.php?id=45548&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V45548" title="77% like this...">
    5
    </div>
  </div>
  <a href="#45548" class="name">
  <strong class="user"><em>mswiercz at mwerk dot com</em></strong></a><a class="genanchor" href="#45548"> &para;</a><div class="date" title="2004-09-10 03:43"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom45548">
<div class="phpcode"><code><span class="html">Quick tip to minimize memory when generating documents with DOM.<br /><br />Rather than using<br />   $xmlStr = DOMDocument-&gt;saveXML();<br />   echo $xmlStr;<br /><br />to dump a large DOM to the output buffer, use a PHP output stream, as in<br /><br />   DOMDocument-&gt;save('php://output');<br /><br />A lot of memory will be saved when generating large DOMs.</span></code></div>
  </div>
 </div>
  <div class="note" id="90676">  <div class="votes">
    <div id="Vu90676">
    <a href="/manual/vote-note.php?id=90676&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd90676">
    <a href="/manual/vote-note.php?id=90676&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V90676" title="80% like this...">
    3
    </div>
  </div>
  <a href="#90676" class="name">
  <strong class="user"><em>qjerry.com at gmail.com</em></strong></a><a class="genanchor" href="#90676"> &para;</a><div class="date" title="2009-05-04 04:24"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom90676">
<div class="phpcode"><code><span class="html">The simpliest (and probably the fastest) way to strip an XML declaration (&lt;?xml version="1.0" ... ?&gt;) out of output document, is to output child nodes of DOMDocument separately:<br /><br /><span class="default">&lt;?php<br /><br />$document </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br /></span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'/some/file.xml'</span><span class="keyword">);<br /><br /></span><span class="comment">// this will also output doctype and comments at top level<br /></span><span class="keyword">foreach(</span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">)<br />    </span><span class="default">$result </span><span class="keyword">.= </span><span class="default">$document</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">).</span><span class="string">"\n"</span><span class="keyword">;<br /><br />echo </span><span class="default">$result</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />This might be userful when dealing with browser compatibility issues, for example, well known problem with valid XHTML in IE6.</span></code></div>
  </div>
 </div>
  <div class="note" id="76867">  <div class="votes">
    <div id="Vu76867">
    <a href="/manual/vote-note.php?id=76867&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76867">
    <a href="/manual/vote-note.php?id=76867&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76867" title="70% like this...">
    4
    </div>
  </div>
  <a href="#76867" class="name">
  <strong class="user"><em>JITR</em></strong></a><a class="genanchor" href="#76867"> &para;</a><div class="date" title="2007-08-02 05:10"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76867">
<div class="phpcode"><code><span class="html">Comment to `devin at SPAMISBAD dot tritarget dot com''s post:<br /><br />Thanks for pointing out the pitfalls of `formatOutput' vs. `load*()'. This has certainly saved me from some possible surprises.<br /><br />I think the seemingly strange behaviour can be explained. Warning: The following stuff is mostly based on deductions and experiments. Much less on studying the sources and specs (I'm not sure some of these would provide answer anyway, at least not easily).<br /><br />As you point out, `preserveWhiteSpace' must be set before loading the DOM from the source string (I'm working with `loadXML()' but I believe the situation should be the same with `load()' you used). This looks logical, as this property seems to control the parsing and DOM creation process during which text nodes containing the whitespace are either included or dropped. This can be proven by dumping the DOM structure and comparing the results based on the value of `preserveWhiteSpace'. With `preserveWhiteSpace' set to `FALSE', no text nodes containing whitespace will be present in the returned DOM. When this property is `TRUE', these nodes will be present.<br /><br />Note: When speaking about the whitespace in the previous paragraph, we're most certainly speaking about so called `whitespace in element content' or `element content whitespace', if I'm not mistaken. See also my comment in the notes of `DOMText-&gt;isWhitespaceInElementContent()' method.<br /><br />As for the mysterious effect on the output of `saveXLM()', I think the explanation lies in the presence or absence of the above mentioned whitespace text nodes. This was also proven by experiments: After adding such a node into a DOM which contained none (the DOM was created using `loadXML()' with `preserveWhiteSpace' set to `FALSE'), the output formatting got affected in a such a way, the formatting got lost for the rest of the document after the added node. I think the presence of whitespace text nodes forces such rendering, that the content of these nodes is used to separate adjoining nodes thus disabling default formatting. Only when there are no such text nodes present, the ouput formatting takes effect (provided the `formatOutput' is set to `TRUE', of course).<br /><br />Well, the thing I don't really understand is how you did get an output of a signle line with `formatOutput' set to `TRUE'. This has happened to me when no whitespace text nodes were present (ie. when loading the XML with `preserveWhiteSpace' set to `FALSE') *and* with `formatOutput' set to *`FALSE'* (with the opposite value of `formatOutput', the formatting should do it's work and you should not end up with just one line). But I haven't seen your source. Perhaps you had whitespace nodes containing no new-lines in your DOM?<br /><br />As for the CAUTION about root element, I didn't see any problems with empty root element neither in shortened nor full form. What did you have in mind, when you said it `WORKS' or `DOES NOT WORK'?</span></code></div>
  </div>
 </div>
  <div class="note" id="109416">  <div class="votes">
    <div id="Vu109416">
    <a href="/manual/vote-note.php?id=109416&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109416">
    <a href="/manual/vote-note.php?id=109416&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109416" title="61% like this...">
    4
    </div>
  </div>
  <a href="#109416" class="name">
  <strong class="user"><em>xianrenb at gmail dot com</em></strong></a><a class="genanchor" href="#109416"> &para;</a><div class="date" title="2012-07-15 10:54"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109416">
<div class="phpcode"><code><span class="html">If you want to save xhtml (in a string), you may try the following method:<br /><span class="default">&lt;?php<br />    $doc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">);<br /><br />    </span><span class="comment">// ...<br /><br />    </span><span class="default">$xhtml </span><span class="keyword">= (string) </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">doctype</span><span class="keyword">);<br />    </span><span class="default">$xhtml </span><span class="keyword">.= </span><span class="string">"\n"</span><span class="keyword">;<br />    </span><span class="default">$xhtml </span><span class="keyword">.= (string) </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114542">  <div class="votes">
    <div id="Vu114542">
    <a href="/manual/vote-note.php?id=114542&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114542">
    <a href="/manual/vote-note.php?id=114542&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114542" title="63% like this...">
    3
    </div>
  </div>
  <a href="#114542" class="name">
  <strong class="user"><em>Alexander Fedulin</em></strong></a><a class="genanchor" href="#114542"> &para;</a><div class="date" title="2014-03-05 08:29"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114542">
<div class="phpcode"><code><span class="html">As @fbernodi said earlier, there is a problem with saveXML of DOMNode when you have a number of defined namespaces. The simple solution for this:<br /><br />&lt;code&gt;<br />   // $node is some node of some other document<br />   $temp_document = new DOMDocument('1.0', 'utf-8');<br />   $temp_document-&gt;appendChild($temp_document-&gt;importNode($node, true));<br />   echo $temp_document-&gt;saveXML();<br />&lt;/code&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="112886">  <div class="votes">
    <div id="Vu112886">
    <a href="/manual/vote-note.php?id=112886&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112886">
    <a href="/manual/vote-note.php?id=112886&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112886" title="66% like this...">
    1
    </div>
  </div>
  <a href="#112886" class="name">
  <strong class="user"><em>fbernoldi at gmail dot com</em></strong></a><a class="genanchor" href="#112886"> &para;</a><div class="date" title="2013-08-01 08:24"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112886">
<div class="phpcode"><code><span class="html">Hello,<br /><br />I had an unexpected behavior in some parsing code, because of this saveXML method that is saving the tags without namespace specification. If you try to load into a DOMDocument a string saved from a DOMNode that has a referenced namespace but it the original document it was not defined in that element, you get a not well formed xml. In the example you can see the issue and a possible solution, the other solution may be add to the ChildElement node the namespace reference (&lt;testNS:ChildElement testNS="<a href="http://example.org" rel="nofollow" target="_blank">http://example.org</a>"&gt;), but in my scenario it was not needed.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">//Test XML<br /></span><span class="default">$test_xml </span><span class="keyword">= <br /></span><span class="string">"&lt;?xml version=\"1.0\"?&gt;<br />&lt;testNS:RootNode xmlns:testNS=\"<a href="http://example.org" rel="nofollow" target="_blank">http://example.org</a>\"&gt;<br />    &lt;testNS:ChildElement&gt;<br />        &lt;testNS:AnotherChildElement&gt;I'm a Another Child node.&lt;/testNS:AnotherChildElement&gt;<br />    &lt;/testNS:ChildElement&gt;<br />&lt;/testNS:RootNode&gt;"</span><span class="keyword">;<br /><br /></span><span class="comment">//We define our Test DOMDocument<br /></span><span class="default">$domDoc </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">"1.0"</span><span class="keyword">);<br /></span><span class="default">$domDoc</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">$test_xml</span><span class="keyword">);<br /><br /></span><span class="comment">//We use xpath to search ChildElement:<br /></span><span class="default">$domXPath </span><span class="keyword">= new </span><span class="default">DOMXPath</span><span class="keyword">(</span><span class="default">$domDoc</span><span class="keyword">);<br /></span><span class="default">$domXPath</span><span class="keyword">-&gt;</span><span class="default">registerNamespace</span><span class="keyword">(</span><span class="string">"testNS"</span><span class="keyword">, </span><span class="string">"<a href="http://example.org" rel="nofollow" target="_blank">http://example.org</a>"</span><span class="keyword">);<br /></span><span class="default">$DOMNodeList_ChildElement </span><span class="keyword">= </span><span class="default">$domXPath</span><span class="keyword">-&gt;</span><span class="default">query</span><span class="keyword">(</span><span class="string">"//testNS:RootNode/testNS:ChildElement"</span><span class="keyword">);<br /></span><span class="default">$ChildElement </span><span class="keyword">= </span><span class="default">$DOMNodeList_ChildElement</span><span class="keyword">-&gt;</span><span class="default">item</span><span class="keyword">(</span><span class="default">0</span><span class="keyword">);<br /><br />echo </span><span class="string">"Not usefull xml to load in another document:\n\n"</span><span class="keyword">;<br />echo </span><span class="default">$domDoc</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$ChildElement</span><span class="keyword">);<br /><br /></span><span class="comment">/* Output here:<br /> * <br /> * Not usefull xml to load in another document:<br /> * <br /> *  &lt;testNS:ChildElement&gt;<br /> *        &lt;testNS:AnotherChildElement&gt;I'm a Another Child node.&lt;/testNS:AnotherChildElement&gt;<br /> *    &lt;/testNS:ChildElement&gt;<br /> * <br /> */<br /><br />/**<br /> * Function to help us clone the element to another document.<br /> * @param DOMElement $node The node to clone.<br /> * @param DOMDocument $doc The document where we are going to reference the elements.<br /> * @return DOMElement The new cloned element without namespace.<br /> */<br /></span><span class="keyword">function </span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">, </span><span class="default">$doc</span><span class="keyword">) {<br />    </span><span class="comment">//Create new element with the original localName (w/o namespace)<br />    </span><span class="default">$nd </span><span class="keyword">= </span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">localName</span><span class="keyword">);<br /><br />    </span><span class="comment">//Clone attributes<br />    </span><span class="keyword">foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes </span><span class="keyword">as </span><span class="default">$value</span><span class="keyword">)<br />        </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">setAttribute</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">localName</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">-&gt;</span><span class="default">value</span><span class="keyword">);<br /><br />    </span><span class="comment">//No more childs then we finish.<br />    </span><span class="keyword">if (!</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes</span><span class="keyword">)<br />        return </span><span class="default">$nd</span><span class="keyword">;<br />    </span><span class="comment">//We have childs, add them<br />    </span><span class="keyword">foreach(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">childNodes </span><span class="keyword">as </span><span class="default">$child</span><span class="keyword">) {<br />        if (</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeName</span><span class="keyword">==</span><span class="string">"#text"</span><span class="keyword">) </span><span class="comment">//Only needed to clone text nodes, i.e. text comments, spaces, tabs. etc.<br />            </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$doc</span><span class="keyword">-&gt;</span><span class="default">createTextNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">nodeValue</span><span class="keyword">));<br />        else<br />            </span><span class="default">$nd</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">, </span><span class="default">$doc</span><span class="keyword">)); </span><span class="comment">//recursion to clone all children.<br />    </span><span class="keyword">}<br />    return </span><span class="default">$nd</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//New Document to reference the new node without namespaces<br /></span><span class="default">$domDoc2 </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">"1.0"</span><span class="keyword">);<br /><br /></span><span class="comment">//We clone this node taking out the namespace<br /></span><span class="default">$new_node </span><span class="keyword">= </span><span class="default">cloneNode</span><span class="keyword">(</span><span class="default">$ChildElement</span><span class="keyword">, </span><span class="default">$domDoc2</span><span class="keyword">);<br /><br />echo </span><span class="string">"\n\nWe can load this into a DOMDocument without problems:\n\n"</span><span class="keyword">;<br />echo </span><span class="default">$domDoc2</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$new_node</span><span class="keyword">);<br /><br /></span><span class="comment">/*<br /> * We can load this into a DOMDocument without problems:<br /> * <br /> *    &lt;ChildElement&gt;<br /> *        &lt;AnotherChildElement&gt;I'm a Another Child node.&lt;/AnotherChildElement&gt;<br /> *    &lt;/ChildElement&gt;<br /> */<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80048">  <div class="votes">
    <div id="Vu80048">
    <a href="/manual/vote-note.php?id=80048&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80048">
    <a href="/manual/vote-note.php?id=80048&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80048" title="66% like this...">
    1
    </div>
  </div>
  <a href="#80048" class="name">
  <strong class="user"><em>Kriogen</em></strong></a><a class="genanchor" href="#80048"> &para;</a><div class="date" title="2007-12-26 12:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80048">
<div class="phpcode"><code><span class="html">Create before test.xml with:<br />&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;Photos&gt; <br />&lt;/Photos&gt;<br /><br />and past after in your php-file:<br /><br /><span class="default">&lt;?php<br />$simp </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">'test.xml'</span><span class="keyword">); <br /></span><span class="default">$node </span><span class="keyword">= </span><span class="default">$simp</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'home'</span><span class="keyword">);<br /></span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'mychild'</span><span class="keyword">, </span><span class="string">'insert text'</span><span class="keyword">);<br /></span><span class="default">$s </span><span class="keyword">= </span><span class="default">simplexml_import_dom</span><span class="keyword">(</span><span class="default">$simp</span><span class="keyword">);<br /></span><span class="default">$s</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="string">'test.xml'</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />This code creating a child-nod in the root.<br />Owner <a href="http://www.mensfashion.ru" rel="nofollow" target="_blank">http://www.mensfashion.ru</a></span></code></div>
  </div>
 </div>
  <div class="note" id="96857">  <div class="votes">
    <div id="Vu96857">
    <a href="/manual/vote-note.php?id=96857&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd96857">
    <a href="/manual/vote-note.php?id=96857&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V96857" title="62% like this...">
    2
    </div>
  </div>
  <a href="#96857" class="name">
  <strong class="user"><em>samstah at gmail dot com</em></strong></a><a class="genanchor" href="#96857"> &para;</a><div class="date" title="2010-03-19 03:56"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom96857">
<div class="phpcode"><code><span class="html">We discovered using DOMDocument::saveHTML() that it converts to HTML 4.01 compatible markup; rather than XHTML. The simple answer is to use saveXML() instead, although this adds the XML declaration to the top. <br /><br />To qjerry.com at gmail.com, thanks for the pointer below - but I think that the simplest way seems to be using:<br /><span class="default">&lt;?php $domDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$domDocument</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">); </span><span class="default">?&gt;<br /></span><br />Of course, if you're dealing with XHTML, this will strip any &lt;!DOCTYPE&gt; declarations in the document too.</span></code></div>
  </div>
 </div>
  <div class="note" id="83396">  <div class="votes">
    <div id="Vu83396">
    <a href="/manual/vote-note.php?id=83396&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd83396">
    <a href="/manual/vote-note.php?id=83396&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V83396" title="60% like this...">
    1
    </div>
  </div>
  <a href="#83396" class="name">
  <strong class="user"><em>shinsh at shinmugen dot net</em></strong></a><a class="genanchor" href="#83396"> &para;</a><div class="date" title="2008-05-23 07:57"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom83396">
<div class="phpcode"><code><span class="html">Be careful, this function has been changed in 5.2.6 version. Adding a required parameter which is not that required wasn't the most intelligent idea ever, especially for a function which is often used.<br /><br />To fix your programs if you have an error, fill the first parameter like this:<br /><br />$dom-&gt;saveXML($dom-&gt;documentElement);<br /><br />Why didn't the devs simply implement this as optional parameter, fixing the default parameter as documentElement?</span></code></div>
  </div>
 </div>
  <div class="note" id="74728">  <div class="votes">
    <div id="Vu74728">
    <a href="/manual/vote-note.php?id=74728&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd74728">
    <a href="/manual/vote-note.php?id=74728&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V74728" title="60% like this...">
    1
    </div>
  </div>
  <a href="#74728" class="name">
  <strong class="user"><em>Sander</em></strong></a><a class="genanchor" href="#74728"> &para;</a><div class="date" title="2007-04-25 05:35"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom74728">
<div class="phpcode"><code><span class="html">Note that for large DOM trees (tens of thousands of elements nested at least a few levels deep), setting formatOutput to true drives up memory usage to rather insane levels when you call saveXML(). (Tested with PHP 5.2.1) Pretty output is not worth that cost.</span></code></div>
  </div>
 </div>
  <div class="note" id="63640">  <div class="votes">
    <div id="Vu63640">
    <a href="/manual/vote-note.php?id=63640&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd63640">
    <a href="/manual/vote-note.php?id=63640&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V63640" title="60% like this...">
    1
    </div>
  </div>
  <a href="#63640" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#63640"> &para;</a><div class="date" title="2006-03-26 04:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom63640">
<div class="phpcode"><code><span class="html">I used the function posted by "joe" but the following works to me for get the innerXML
<br /><span class="default">&lt;?php
<br />$itemLeido </span><span class="keyword">= </span><span class="default">$XMLRespuesta</span><span class="keyword">-&gt;</span><span class="default">getElementsByTagName</span><span class="keyword">(</span><span class="string">"articulos"</span><span class="keyword">); 
<br />foreach(</span><span class="default">$itemLeido </span><span class="keyword">as </span><span class="default">$node</span><span class="keyword">) {
<br />    echo(</span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">-&gt;</span><span class="default">saveXML</span><span class="keyword">(</span><span class="default">$node</span><span class="keyword">));
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="71984">  <div class="votes">
    <div id="Vu71984">
    <a href="/manual/vote-note.php?id=71984&amp;page=domdocument.savexml&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71984">
    <a href="/manual/vote-note.php?id=71984&amp;page=domdocument.savexml&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71984" title="100% like this...">
    2
    </div>
  </div>
  <a href="#71984" class="name">
  <strong class="user"><em>nevyn at NOSPAM dot email dot PLEASE dot it</em></strong></a><a class="genanchor" href="#71984"> &para;</a><div class="date" title="2006-12-27 01:41"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71984">
<div class="phpcode"><code><span class="html">A little function to get the full xml contents of a Xml node.<br /><br />function innerXml($node)<br />{<br />    $out = $node-&gt;ownerDocument-&gt;saveXML($node);<br />    $re = "{^&lt;(\\w*)(?:\\s*\\w+=(?:\"[^\"]*\"|\'[^\']*\'))*\\s*&gt;(.*)&lt;/\\1&gt;$}";<br />    preg_match($re, $out, $mat);<br />    return $mat[2];<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.savexml&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.savexml.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="domdocument.savehtml.php" title="saveHTML">saveHTML</a>
                        </li>
                                                <li class="">
                            <a href="domdocument.savehtmlfile.php" title="saveHTMLFile">saveHTMLFile</a>
                        </li>
                                                <li class="current">
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
