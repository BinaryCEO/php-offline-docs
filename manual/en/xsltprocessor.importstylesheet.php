<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XSLTProcessor::importStylesheet - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xsltprocessor.importstylesheet.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xsltprocessor.importstylesheet.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.importstylesheet.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.xsltprocessor.php">
 <link rel="prev" href="https://www.php.net/manual/en/xsltprocessor.hasexsltsupport.php">
 <link rel="next" href="https://www.php.net/manual/en/xsltprocessor.registerphpfunctionns.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xsltprocessor.importstylesheet.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xsltprocessor.importstylesheet.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xsltprocessor.importstylesheet.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xsltprocessor.importstylesheet.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xsltprocessor.importstylesheet.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xsltprocessor.importstylesheet.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xsltprocessor.importstylesheet.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xsltprocessor.importstylesheet.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xsltprocessor.importstylesheet.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xsltprocessor.importstylesheet.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xsltprocessor.importstylesheet.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Import stylesheet" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XSLTProcessor::importStylesheet - Manual" />
<meta name="twitter:description" content="Import stylesheet" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XSLTProcessor::importStylesheet - Manual" />
<meta itemprop="description" content="Import stylesheet" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Import stylesheet" />

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
        <a href="xsltprocessor.registerphpfunctionns.php">
          XSLTProcessor::registerPHPFunctionNS &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xsltprocessor.hasexsltsupport.php">
          &laquo; XSLTProcessor::hasExsltSupport        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xsl.php'>XSL</a></li>      <li><a href='class.xsltprocessor.php'>XSLTProcessor</a></li>      </ul>
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
            <option value='en/xsltprocessor.importstylesheet.php' selected="selected">English</option>
            <option value='de/xsltprocessor.importstylesheet.php'>German</option>
            <option value='es/xsltprocessor.importstylesheet.php'>Spanish</option>
            <option value='fr/xsltprocessor.importstylesheet.php'>French</option>
            <option value='it/xsltprocessor.importstylesheet.php'>Italian</option>
            <option value='ja/xsltprocessor.importstylesheet.php'>Japanese</option>
            <option value='pt_BR/xsltprocessor.importstylesheet.php'>Brazilian Portuguese</option>
            <option value='ru/xsltprocessor.importstylesheet.php'>Russian</option>
            <option value='tr/xsltprocessor.importstylesheet.php'>Turkish</option>
            <option value='uk/xsltprocessor.importstylesheet.php'>Ukrainian</option>
            <option value='zh/xsltprocessor.importstylesheet.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xsltprocessor.importstylesheet" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">XSLTProcessor::importStylesheet</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">XSLTProcessor::importStylesheet</span> &mdash; <span class="dc-title">Import stylesheet</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-xsltprocessor.importstylesheet-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>XSLTProcessor::importStylesheet</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$stylesheet</code></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   This method imports the stylesheet into the 
   <span class="classname"><a href="class.xsltprocessor.php" class="classname">XSLTProcessor</a></span> for transformations.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-xsltprocessor.importstylesheet-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">stylesheet</code></dt>
     <dd>
      <p class="para">
       The imported style sheet as a <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span>,
       <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> or
       <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> object.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-xsltprocessor.importstylesheet-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-xsltprocessor.importstylesheet-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="simpara">
   Throws a <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> if
   <code class="parameter">stylesheet</code> is not an XML object.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-xsltprocessor.importstylesheet-changelog">
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
      <td>8.4.0</td>
      <td>
       Added support for <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span>.
      </td>
     </tr>

     <tr>
      <td>8.4.0</td>
      <td>
       Now throws a <span class="exceptionname"><a href="class.typeerror.php" class="exceptionname">TypeError</a></span> instead of a
       <span class="exceptionname"><a href="class.valueerror.php" class="exceptionname">ValueError</a></span> if
       <code class="parameter">stylesheet</code> is not an XML object.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xsl/xsltprocessor/importstylesheet.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxsltprocessor.importstylesheet%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xsltprocessor.importstylesheet&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.importstylesheet.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79257">  <div class="votes">
    <div id="Vu79257">
    <a href="/manual/vote-note.php?id=79257&amp;page=xsltprocessor.importstylesheet&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79257">
    <a href="/manual/vote-note.php?id=79257&amp;page=xsltprocessor.importstylesheet&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79257" title="69% like this...">
    5
    </div>
  </div>
  <a href="#79257" class="name">
  <strong class="user"><em>kevin at metalaxe dot com</em></strong></a><a class="genanchor" href="#79257"> &para;</a><div class="date" title="2007-11-17 03:26"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79257">
<div class="phpcode"><code><span class="html">Just for reference, as of this writing, this function does not support importing multiple stylesheets. The following will output only the stylesheet transformation of the second imported sheet:
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="comment"># LOAD XML FILE
<br /></span><span class="default">$XML </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$XML</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">( </span><span class="string">'data.xml' </span><span class="keyword">);
<br />
<br /></span><span class="comment"># START XSLT
<br /></span><span class="default">$xslt </span><span class="keyword">= new </span><span class="default">XSLTProcessor</span><span class="keyword">();
<br />
<br /></span><span class="comment"># IMPORT STYLESHEET 1
<br /></span><span class="default">$XSL </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$XSL</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">( </span><span class="string">'template1.xsl' </span><span class="keyword">);
<br /></span><span class="default">$xslt</span><span class="keyword">-&gt;</span><span class="default">importStylesheet</span><span class="keyword">( </span><span class="default">$XSL </span><span class="keyword">);
<br />
<br /></span><span class="comment">#IMPORT STYLESHEET 2
<br /></span><span class="default">$XSL </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$XSL</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">( </span><span class="string">'template2.xsl' </span><span class="keyword">);
<br /></span><span class="default">$xslt</span><span class="keyword">-&gt;</span><span class="default">importStylesheet</span><span class="keyword">( </span><span class="default">$XSL </span><span class="keyword">);
<br />
<br /></span><span class="comment">#PRINT
<br /></span><span class="keyword">print </span><span class="default">$xslt</span><span class="keyword">-&gt;</span><span class="default">transformToXML</span><span class="keyword">( </span><span class="default">$XML </span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />This wasn't documented and quite dissapointing.</span></code></div>
  </div>
 </div>
  <div class="note" id="50504">  <div class="votes">
    <div id="Vu50504">
    <a href="/manual/vote-note.php?id=50504&amp;page=xsltprocessor.importstylesheet&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50504">
    <a href="/manual/vote-note.php?id=50504&amp;page=xsltprocessor.importstylesheet&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50504" title="80% like this...">
    3
    </div>
  </div>
  <a href="#50504" class="name">
  <strong class="user"><em>bbrosseau at gmail</em></strong></a><a class="genanchor" href="#50504"> &para;</a><div class="date" title="2005-03-01 08:46"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50504">
<div class="phpcode"><code><span class="html">For those who wants to use external documents, it is important not to use the DomDocument::loadXML because the processor will not have the path to look for other files
<br /> 
<br />So if you want to transform some xml with a pre-generated stylesheet $f:
<br />
<br /><span class="default">&lt;?php
<br />$f </span><span class="keyword">= </span><span class="string">'somestylesheet.xsl'</span><span class="keyword">;
<br /></span><span class="default">$xsl </span><span class="keyword">= </span><span class="default">DomDocument</span><span class="keyword">::</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">));
<br /></span><span class="default">?&gt;
<br /></span>
<br />document('other.xml') will not work with relative path and <span class="default">&lt;?php $xsl </span><span class="keyword">= </span><span class="default">DomDocument</span><span class="keyword">::</span><span class="default">load</span><span class="keyword">(</span><span class="default">$f</span><span class="keyword">); </span><span class="default">?&gt;</span> will!</span></code></div>
  </div>
 </div>
  <div class="note" id="73980">  <div class="votes">
    <div id="Vu73980">
    <a href="/manual/vote-note.php?id=73980&amp;page=xsltprocessor.importstylesheet&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd73980">
    <a href="/manual/vote-note.php?id=73980&amp;page=xsltprocessor.importstylesheet&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V73980" title="60% like this...">
    1
    </div>
  </div>
  <a href="#73980" class="name">
  <strong class="user"><em>diesel at spbnet dot ru</em></strong></a><a class="genanchor" href="#73980"> &para;</a><div class="date" title="2007-03-19 09:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom73980">
<div class="phpcode"><code><span class="html">This is not a problem. You may set DOMDocument's documentURI property. 
<br />Something like this 
<br />
<br /><span class="default">&lt;?php
<br />$xsl </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">(</span><span class="string">'1.0'</span><span class="keyword">,</span><span class="string">'UTF-8'</span><span class="keyword">);
<br />     
<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">loadXML</span><span class="keyword">(</span><span class="default">file_get_contents</span><span class="keyword">(</span><span class="string">'/foo/bar/somefile.xsl'</span><span class="keyword">);
<br /></span><span class="default">$xsl</span><span class="keyword">-&gt;</span><span class="default">documentURI </span><span class="keyword">= </span><span class="string">'/foo/bar/somefile.xsl'</span><span class="keyword">;
<br />
<br /></span><span class="default">$xslProc </span><span class="keyword">= new </span><span class="default">XSLTProcessor</span><span class="keyword">();
<br /></span><span class="default">$xslProc</span><span class="keyword">-&gt;</span><span class="default">importStylesheet</span><span class="keyword">(</span><span class="default">$xsl</span><span class="keyword">);
<br /></span><span class="default">?&gt;
<br /></span>
<br />and document('other.xsl') will work fine!</span></code></div>
  </div>
 </div>
  <div class="note" id="76589">  <div class="votes">
    <div id="Vu76589">
    <a href="/manual/vote-note.php?id=76589&amp;page=xsltprocessor.importstylesheet&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd76589">
    <a href="/manual/vote-note.php?id=76589&amp;page=xsltprocessor.importstylesheet&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V76589" title="50% like this...">
    0
    </div>
  </div>
  <a href="#76589" class="name">
  <strong class="user"><em>fcartegnie</em></strong></a><a class="genanchor" href="#76589"> &para;</a><div class="date" title="2007-07-21 06:11"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom76589">
<div class="phpcode"><code><span class="html">PHP5 xsl processor has a different behaviour than PHP4's one with CDATA sections. (see <a href="http://bugs.php.net/bug.php?id=29837" rel="nofollow" target="_blank">http://bugs.php.net/bug.php?id=29837</a>)
<br />Loaded XSL sheet CDATA sections does not allow, by default, output-escaping handling (everything in the CDATA is escaped by default).
<br />
<br />So in this case you can't build your XSL Dom the usual way:
<br />    $xsldom = DomDocument::loadXML(file_get_contents('sheet.xsl'));
<br />
<br />and must go through this one (allowing LIBXML_NOCDATA parameter):
<br />    $xsldom = new DomDocument;
<br />    $xsldom-&gt;load('sheet.xsl', LIBXML_NOCDATA);
<br />
<br />Then the CDATA output-escaping behaviour will be correct.</span></code></div>
  </div>
 </div>
  <div class="note" id="109379">  <div class="votes">
    <div id="Vu109379">
    <a href="/manual/vote-note.php?id=109379&amp;page=xsltprocessor.importstylesheet&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109379">
    <a href="/manual/vote-note.php?id=109379&amp;page=xsltprocessor.importstylesheet&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109379" title="20% like this...">
    -3
    </div>
  </div>
  <a href="#109379" class="name">
  <strong class="user"><em>rbmeo at yahoo dot com</em></strong></a><a class="genanchor" href="#109379"> &para;</a><div class="date" title="2012-07-12 09:52"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109379">
<div class="phpcode"><code><span class="html">To make your import dynamic, try this code:
<br />
<br /><span class="default">&lt;?php
<br />$dom </span><span class="keyword">= new </span><span class="default">DOMDocument</span><span class="keyword">();
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">load</span><span class="keyword">(</span><span class="string">'main.xsl'</span><span class="keyword">);
<br /></span><span class="default">$xpath </span><span class="keyword">= new </span><span class="default">DomXPath</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">);
<br /></span><span class="default">$importnode</span><span class="keyword">= </span><span class="default">$questionsXsl</span><span class="keyword">-&gt;</span><span class="default">createElement</span><span class="keyword">(</span><span class="string">'xsl:include'</span><span class="keyword">);
<br /></span><span class="default">$attr</span><span class="keyword">= </span><span class="default">$questionsXsl</span><span class="keyword">-&gt;</span><span class="default">createAttribute</span><span class="keyword">(</span><span class="string">'href'</span><span class="keyword">);
<br /></span><span class="default">$attr</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="string">'import.xsl'</span><span class="keyword">;
<br /></span><span class="default">$importnode</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$attr</span><span class="keyword">);
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">documentElement</span><span class="keyword">-&gt;</span><span class="default">insertBefore</span><span class="keyword">(</span><span class="default">$importnode</span><span class="keyword">,</span><span class="default">$ref</span><span class="keyword">);
<br /></span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">loadXml</span><span class="keyword">(</span><span class="default">$dom</span><span class="keyword">-&gt;</span><span class="default">saveXml</span><span class="keyword">());
<br /></span><span class="default">?&gt;
<br /></span>
<br />this code basically loads the main stylesheet, prepend the import xsl code then reload as xml string so the imported stylesheet will be loaded at dom.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=xsltprocessor.importstylesheet&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xsltprocessor.importstylesheet.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.xsltprocessor.php">XSLTProcessor</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="xsltprocessor.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getparameter.php" title="getParameter">getParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.getsecurityprefs.php" title="getSecurityPrefs">getSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.hasexsltsupport.php" title="hasExsltSupport">hasExsltSupport</a>
                        </li>
                                                <li class="current">
                            <a href="xsltprocessor.importstylesheet.php" title="importStylesheet">importStylesheet</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctionns.php" title="registerPHPFunctionNS">registerPHPFunctionNS</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.registerphpfunctions.php" title="registerPHPFunctions">registerPHPFunctions</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.removeparameter.php" title="removeParameter">removeParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setparameter.php" title="setParameter">setParameter</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setprofiling.php" title="setProfiling">setProfiling</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.setsecurityprefs.php" title="setSecurityPrefs">setSecurityPrefs</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtodoc.php" title="transformToDoc">transformToDoc</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtouri.php" title="transformToUri">transformToUri</a>
                        </li>
                                                <li class="">
                            <a href="xsltprocessor.transformtoxml.php" title="transformToXml">transformToXml</a>
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
