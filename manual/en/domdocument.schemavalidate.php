<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: DOMDocument::schemaValidate - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/domdocument.schemavalidate.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/domdocument.schemavalidate.php">
 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.schemavalidate.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.domdocument.php">
 <link rel="prev" href="https://www.php.net/manual/en/domdocument.savexml.php">
 <link rel="next" href="https://www.php.net/manual/en/domdocument.schemavalidatesource.php">

 <link rel="alternate" href="https://www.php.net/manual/en/domdocument.schemavalidate.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/domdocument.schemavalidate.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/domdocument.schemavalidate.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/domdocument.schemavalidate.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/domdocument.schemavalidate.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/domdocument.schemavalidate.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/domdocument.schemavalidate.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/domdocument.schemavalidate.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/domdocument.schemavalidate.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/domdocument.schemavalidate.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/domdocument.schemavalidate.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Validates a document based on a schema. Only XML Schema 1.0 is supported." />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: DOMDocument::schemaValidate - Manual" />
<meta name="twitter:description" content="Validates a document based on a schema. Only XML Schema 1.0 is supported." />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: DOMDocument::schemaValidate - Manual" />
<meta itemprop="description" content="Validates a document based on a schema. Only XML Schema 1.0 is supported." />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Validates a document based on a schema. Only XML Schema 1.0 is supported." />

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
        <a href="domdocument.schemavalidatesource.php">
          DOMDocument::schemaValidateSource &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="domdocument.savexml.php">
          &laquo; DOMDocument::saveXML        </a>
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
            <option value='en/domdocument.schemavalidate.php' selected="selected">English</option>
            <option value='de/domdocument.schemavalidate.php'>German</option>
            <option value='es/domdocument.schemavalidate.php'>Spanish</option>
            <option value='fr/domdocument.schemavalidate.php'>French</option>
            <option value='it/domdocument.schemavalidate.php'>Italian</option>
            <option value='ja/domdocument.schemavalidate.php'>Japanese</option>
            <option value='pt_BR/domdocument.schemavalidate.php'>Brazilian Portuguese</option>
            <option value='ru/domdocument.schemavalidate.php'>Russian</option>
            <option value='tr/domdocument.schemavalidate.php'>Turkish</option>
            <option value='uk/domdocument.schemavalidate.php'>Ukrainian</option>
            <option value='zh/domdocument.schemavalidate.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="domdocument.schemavalidate" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">DOMDocument::schemaValidate</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">DOMDocument::schemaValidate</span> &mdash; <span class="dc-title">
   Validates a document based on a schema. Only XML Schema 1.0 is supported.
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-domdocument.schemavalidate-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>DOMDocument::schemaValidate</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$filename</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = 0</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Validates a document based on the given schema file. 
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-domdocument.schemavalidate-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">filename</code></dt>
     <dd>
      <p class="para">
       The path to the schema.
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       A bitmask of Libxml schema validation flags. Currently the only supported value is <a href="libxml.constants.php" class="link">LIBXML_SCHEMA_CREATE</a>. Available since Libxml 2.6.14.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-domdocument.schemavalidate-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-domdocument.schemavalidate-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="domdocument.schemavalidatesource.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::schemaValidateSource()</a> - Validates a document based on a schema</span></li>
    <li><span class="methodname"><a href="domdocument.relaxngvalidate.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::relaxNGValidate()</a> - Performs relaxNG validation on the document</span></li>
    <li><span class="methodname"><a href="domdocument.relaxngvalidatesource.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::relaxNGValidateSource()</a> - Performs relaxNG validation on the document</span></li>
    <li><span class="methodname"><a href="domdocument.validate.php" class="methodname" rel="rdfs-seeAlso">DOMDocument::validate()</a> - Validates the document based on its DTD</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/domdocument/schemavalidate.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdomdocument.schemavalidate%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=domdocument.schemavalidate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.schemavalidate.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="62032">  <div class="votes">
    <div id="Vu62032">
    <a href="/manual/vote-note.php?id=62032&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd62032">
    <a href="/manual/vote-note.php?id=62032&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V62032" title="75% like this...">
    37
    </div>
  </div>
  <a href="#62032" class="name">
  <strong class="user"><em>Mike A.</em></strong></a><a class="genanchor" href="#62032"> &para;</a><div class="date" title="2006-02-17 12:03"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom62032">
<div class="phpcode"><code><span class="html">For more detailed feedback from DOMDocument::schemaValidate, disable libxml errors and fetch error information yourself.  See <a href="http://php.net/manual/en/ref.libxml.php" rel="nofollow" target="_blank">http://php.net/manual/en/ref.libxml.php</a> for more info.<br /><br />example.xml<br />&lt;?xml version="1.0"?&gt;<br />&lt;example&gt;<br />    &lt;child_string&gt;This is an example.&lt;/child_string&gt;<br />    &lt;child_integer&gt;Error condition.&lt;/child_integer&gt;<br />&lt;/example&gt;<br /><br />example.xsd<br />&lt;?xml version="1.0"?&gt;<br />&lt;xs:schema xmlns:xs="<a href="http://www.w3.org/2001/XMLSchema" rel="nofollow" target="_blank">http://www.w3.org/2001/XMLSchema</a>"<br />elementFormDefault="qualified"&gt;<br />    &lt;xs:element name="example"&gt;<br />        &lt;xs:complexType&gt;<br />            &lt;xs:sequence&gt;<br />                &lt;xs:element name="child_string" type="xs:string"/&gt;<br />                &lt;xs:element name="child_integer" type="xs:integer"/&gt;<br />            &lt;/xs:sequence&gt;<br />        &lt;/xs:complexType&gt;<br />    &lt;/xs:element&gt;<br />&lt;/xs:schema&gt;<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">function </span><span class="default">libxml_display_error</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">)<br />{<br />    </span><span class="default">$return </span><span class="keyword">= </span><span class="string">"&lt;br/&gt;\n"</span><span class="keyword">;<br />    switch (</span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">level</span><span class="keyword">) {<br />        case </span><span class="default">LIBXML_ERR_WARNING</span><span class="keyword">:<br />            </span><span class="default">$return </span><span class="keyword">.= </span><span class="string">"&lt;b&gt;Warning </span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">code</span><span class="string">&lt;/b&gt;: "</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">LIBXML_ERR_ERROR</span><span class="keyword">:<br />            </span><span class="default">$return </span><span class="keyword">.= </span><span class="string">"&lt;b&gt;Error </span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">code</span><span class="string">&lt;/b&gt;: "</span><span class="keyword">;<br />            break;<br />        case </span><span class="default">LIBXML_ERR_FATAL</span><span class="keyword">:<br />            </span><span class="default">$return </span><span class="keyword">.= </span><span class="string">"&lt;b&gt;Fatal Error </span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">code</span><span class="string">&lt;/b&gt;: "</span><span class="keyword">;<br />            break;<br />    }<br />    </span><span class="default">$return </span><span class="keyword">.= </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">message</span><span class="keyword">);<br />    if (</span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="keyword">) {<br />        </span><span class="default">$return </span><span class="keyword">.=    </span><span class="string">" in &lt;b&gt;</span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">file</span><span class="string">&lt;/b&gt;"</span><span class="keyword">;<br />    }<br />    </span><span class="default">$return </span><span class="keyword">.= </span><span class="string">" on line &lt;b&gt;</span><span class="default">$error</span><span class="keyword">-&gt;</span><span class="default">line</span><span class="string">&lt;/b&gt;\n"</span><span class="keyword">;<br /><br />    return </span><span class="default">$return</span><span class="keyword">;<br />}<br /><br />function </span><span class="default">libxml_display_errors</span><span class="keyword">() {<br />    </span><span class="default">$errors </span><span class="keyword">= </span><span class="default">libxml_get_errors</span><span class="keyword">();<br />    foreach (</span><span class="default">$errors </span><span class="keyword">as </span><span class="default">$error</span><span class="keyword">) {<br />        print </span><span class="default">libxml_display_error</span><span class="keyword">(</span><span class="default">$error</span><span class="keyword">);<br />    }<br />    </span><span class="default">libxml_clear_errors</span><span class="keyword">();<br />}<br /><br /></span><span class="comment">// Enable user error handling<br /></span><span class="default">libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(); <br /></span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'example.xml'</span><span class="keyword">); <br /><br />if (!</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">schemaValidate</span><span class="keyword">(</span><span class="string">'example.xsd'</span><span class="keyword">)) {<br />    print </span><span class="string">'&lt;b&gt;DOMDocument::schemaValidate() Generated Errors!&lt;/b&gt;'</span><span class="keyword">;<br />    </span><span class="default">libxml_display_errors</span><span class="keyword">();<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Old error message:<br />Warning: DOMDocument::schemaValidate() [function.schemaValidate]: Element 'child_integer': 'Error condition.' is not a valid value of the atomic type 'xs:integer'. in example.php on line 40<br /><br />New error message:<br />DOMDocument::schemaValidate() Generated Errors!<br />Error 1824: Element 'child_integer': 'Error condition.' is not a valid value of the atomic type 'xs:integer'. in example.xml on line 4</span></code></div>
  </div>
 </div>
  <div class="note" id="89893">  <div class="votes">
    <div id="Vu89893">
    <a href="/manual/vote-note.php?id=89893&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd89893">
    <a href="/manual/vote-note.php?id=89893&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V89893" title="73% like this...">
    11
    </div>
  </div>
  <a href="#89893" class="name">
  <strong class="user"><em>NetPanther</em></strong></a><a class="genanchor" href="#89893"> &para;</a><div class="date" title="2009-03-27 01:42"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom89893">
<div class="phpcode"><code><span class="html">Initial situation:<br />- Debian Lenny<br />- Apache 2 with PHP 5.2.6<br />- libxml 2.6.32<br /><br />Problem: While trying to validate a manually created (!) DOMDocument against an existing XML Schema, I ran into a warning like the one below. Validation fails, even though the document IS valid and the command line tool xmllint confirms this (even with libxml 2.6.32, so this must be a problem with DOM). The validation works fine with libxml 2.7.3.<br /><br />Warning: DOMDocument::schemaValidate() [domdocument.schemavalidate]: Element 'YourRootElementName': No matching global declaration available for the validation root. in /var/www/YourFile.php on line X<br /><br />Solution: As libxml 2.7.3 is not provided for Debian Lenny yet and this problem seems to be caused by DOM (s.o.), I currently use the following workaround on my machines. DOM obviously has some namespace problems with documents, that have been created manually (i.e. they were not loaded from a file).<br /><br />So my workaround is saving the DOMDocument temporarily, re-loading it and then validating the temporary DOMDocument. Strangely enough the validation of the same document (= same content) now works. Sure, creating a temporary file is not a nice solution, but unless this bug is fixed, this workaround should do just fine.<br /><br /><span class="default">&lt;?php  <br /><br /></span><span class="comment">// Works with libxml 2.7.3 and higher.<br /></span><span class="keyword">public function </span><span class="default">isValid</span><span class="keyword">()<br />{<br />  return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dom</span><span class="keyword">-&gt;</span><span class="default">schemaValidate</span><span class="keyword">(</span><span class="string">'schema.xsd'</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// Workaround for prior libxml versions, e.g. 2.6.32.<br /></span><span class="keyword">public function </span><span class="default">isValid</span><span class="keyword">()<br />{<br />  </span><span class="comment">// Create temporary file and save manually created DOMDocument.<br />  </span><span class="default">$tempFile </span><span class="keyword">= </span><span class="default">time</span><span class="keyword">() . </span><span class="string">'-' </span><span class="keyword">. </span><span class="default">rand</span><span class="keyword">() . </span><span class="string">'-document.tmp'</span><span class="keyword">;<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">dom</span><span class="keyword">-&gt;</span><span class="default">save</span><span class="keyword">(</span><span class="default">$tempFile</span><span class="keyword">);<br />  <br />  </span><span class="comment">// Create temporary DOMDocument and re-load content from file.<br />  </span><span class="default">$tempDom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();<br />  </span><span class="default">$tempDom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="default">$tempFile</span><span class="keyword">);<br />  <br />  </span><span class="comment">// Delete temporary file.<br />  </span><span class="keyword">if (</span><span class="default">is_file</span><span class="keyword">(</span><span class="default">$tempFile</span><span class="keyword">))<br />  {<br />    </span><span class="default">unlink</span><span class="keyword">(</span><span class="default">$tempFile</span><span class="keyword">);<br />  }<br />  <br />  </span><span class="comment">// Validate temporary DOMDocument.<br />  </span><span class="keyword">return </span><span class="default">$tempDom</span><span class="keyword">-&gt;</span><span class="default">schemaValidate</span><span class="keyword">(</span><span class="string">'schema.xsd'</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117995">  <div class="votes">
    <div id="Vu117995">
    <a href="/manual/vote-note.php?id=117995&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117995">
    <a href="/manual/vote-note.php?id=117995&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117995" title="75% like this...">
    6
    </div>
  </div>
  <a href="#117995" class="name">
  <strong class="user"><em>mmamsch at googlemail dot com</em></strong></a><a class="genanchor" href="#117995"> &para;</a><div class="date" title="2015-09-16 10:01"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117995">
<div class="phpcode"><code><span class="html">A note for people trying to validate complex schemas with PHP.  It seems that libxml will not automatically try to import referenced schemas, but simply skip the validation if the schemas were not explicitly imported. <br /><br />In our example we tried to validate an XML file against a schema with the namespace "xttp://automotive-his.de/200706/rif" that contains a reference to the namespace "xttp://automotive-his.de/200706/rif-xhtml":<br /><br />  &lt;xsd:complexType name="XHTML-CONTENT"&gt;<br />    &lt;xsd:sequence&gt;<br />      &lt;xsd:any namespace="xttp://automotive-his.de/200706/rif-xhtml"/&gt;<br />    &lt;/xsd:sequence&gt;<br />  &lt;/xsd:complexType&gt;<br /><br />which basically says that an xhtml-content element can contain any element from the rif-xhtml namespace. <br /><br />However since libxml does not know where to find the schema file, it will stop the validation if the elements from the referenced namespace, passing also document with invalid xhtml content as valid. <br /><br />The solution was to create a combined schema, which contains import statements for all files matching the referenced schemas: <br /><br />&lt;xsd:schema xmlns:xs="xttp://www.w3.org/2001/XMLSchema"&gt;<br />&lt;xs:import namespace="xttp://automotive-his.de/200706/rif-xhtml" schemaLocation="rif-xhtml.xsd"/&gt;<br />&lt;xs:import namespace="xttp://automotive-his.de/200706/rif" schemaLocation="rif.xsd"/&gt;<br />&lt;xs:import namespace="xttp://www.w3.org/XML/1998/namespace" schemaLocation="../xml.xsd"/&gt;<br />&lt;/xsd:schema&gt;<br /><br />Note that the schemaLocation tells the validator, where to find the files for the corresponding namespaces. When validating the XML document against this combined schema, libxml validated correctly the content inside the XHTML-Content. <br /><br />Hope this helps someone out there.</span></code></div>
  </div>
 </div>
  <div class="note" id="81068">  <div class="votes">
    <div id="Vu81068">
    <a href="/manual/vote-note.php?id=81068&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81068">
    <a href="/manual/vote-note.php?id=81068&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81068" title="66% like this...">
    3
    </div>
  </div>
  <a href="#81068" class="name">
  <strong class="user"><em>poletto at jeuxvideo dot com</em></strong></a><a class="genanchor" href="#81068"> &para;</a><div class="date" title="2008-02-13 12:32"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81068">
<div class="phpcode"><code><span class="html">I had a tricky issue using this method, i thought it was bug but i realized i misundestood something about namespaces.<br />When you want to use a schema to describe an xml document, you basically put the default namespace to a personnal namespace (and you refer to this namespace in the targetNamespace attribute of your schema).<br /><br />&lt;?xml version="1.0" encoding="utf-8"?&gt;<br />&lt;root xmlns="<a href="http://my.uri.net" rel="nofollow" target="_blank">http://my.uri.net</a>"&gt;<br />  &lt;elt&gt;<br />    &lt;x&gt;blabla&lt;/x&gt;<br />    &lt;y&gt;blabla&lt;/y&gt;<br />  &lt;/elt&gt;<br />&lt;/root&gt;<br /><br />That xmlns attribute specifies a "default namespace" and means that the root element and its children are in this namespace.<br />What i misunderstood is that, there's no way with the DOM api to specify a "default namespace" for each children of the root element.<br />Thus you may need to use createElementNS() and createAttributeNS() methods for each created element or attribute in the document specifying the URI of your namespace each time ("<a href="http://my.uri.net" rel="nofollow" target="_blank">http://my.uri.net</a>").<br /><br />This only applies if you want to validate a document built with the API, not with a document loaded from an xml file or stream.</span></code></div>
  </div>
 </div>
  <div class="note" id="71014">  <div class="votes">
    <div id="Vu71014">
    <a href="/manual/vote-note.php?id=71014&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71014">
    <a href="/manual/vote-note.php?id=71014&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71014" title="42% like this...">
    -1
    </div>
  </div>
  <a href="#71014" class="name">
  <strong class="user"><em>justin at redwiredesign dot com</em></strong></a><a class="genanchor" href="#71014"> &para;</a><div class="date" title="2006-11-08 03:32"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71014">
<div class="phpcode"><code><span class="html">In his previous comment, Mike A wrote about validating documents using an XSD. However, you can validate without one. In my case, I needed to ensure that the content entered was just valid XML or not, and I couldn't find an XSD to support that. So I wrote this:<br /><br />public static function validate($xml)<br />{<br />    libxml_use_internal_errors(true);<br /><br />    $doc = new DOMDocument('1.0', 'utf-8');<br />    $doc-&gt;loadXML($xml);<br /><br />    $errors = libxml_get_errors();<br />    if (empty($errors))<br />    {<br />        return true;<br />    }<br /><br />    $error = $errors[0];<br />    if ($error-&gt;level &lt; 3)<br />    {<br />        return true;<br />    }<br /><br />    $lines = explode("\r", $xml);<br />    $line = $lines[($error-&gt;line)-1];<br /><br />    $message = $error-&gt;message.' at line '.$error-&gt;line.':&lt;br /&gt;'.htmlentities($line);<br /><br />    return $message;<br />}<br /><br />The catch here is that the function only checks for the first error is LIBXML_ERR_FATAL, which would break XSL/XML compilation.<br /><br />In my experience, the errors are returned by libxml_get_errors in descending severity, so this may be an OK thing to do.</span></code></div>
  </div>
 </div>
  <div class="note" id="101782">  <div class="votes">
    <div id="Vu101782">
    <a href="/manual/vote-note.php?id=101782&amp;page=domdocument.schemavalidate&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd101782">
    <a href="/manual/vote-note.php?id=101782&amp;page=domdocument.schemavalidate&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V101782" title="37% like this...">
    -2
    </div>
  </div>
  <a href="#101782" class="name">
  <strong class="user"><em>wkoehler at ce-gmbh dot com</em></strong></a><a class="genanchor" href="#101782"> &para;</a><div class="date" title="2011-01-11 02:37"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom101782">
<div class="phpcode"><code><span class="html">In older versions of PHP5 this function might cause error messages when dealing with namespaces. I had problems with PHP 5.2.14 which comes with libXML V2.6.16. After switching to PHP 5.3.5 with libXML V2.7.7 I no longer had problems. Took me only about 30 hrs to figure that one out.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=domdocument.schemavalidate&amp;repo=en&amp;redirect=https://www.php.net/manual/en/domdocument.schemavalidate.php">＋<small>add a note</small></a></div>
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
                                                <li class="">
                            <a href="domdocument.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="current">
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
