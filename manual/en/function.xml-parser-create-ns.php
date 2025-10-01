<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_parser_create_ns - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-parser-create-ns.php">
 <link rel="shorturl" href="https://www.php.net/xml-parser-create-ns">
 <link rel="alternate" href="https://www.php.net/xml-parser-create-ns" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-parser-create.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-parser-free.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-parser-create-ns.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-parser-create-ns.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-parser-create-ns.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-parser-create-ns.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-parser-create-ns.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-parser-create-ns.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-parser-create-ns.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-parser-create-ns.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-parser-create-ns.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-parser-create-ns.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-parser-create-ns.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Create an XML parser with namespace support" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_parser_create_ns - Manual" />
<meta name="twitter:description" content="Create an XML parser with namespace support" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_parser_create_ns - Manual" />
<meta itemprop="description" content="Create an XML parser with namespace support" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Create an XML parser with namespace support" />

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
        <a href="function.xml-parser-free.php">
          xml_parser_free &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-parser-create.php">
          &laquo; xml_parser_create        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xml.php'>XML Parser</a></li>      <li><a href='ref.xml.php'>XML Parser Functions</a></li>      </ul>
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
            <option value='en/function.xml-parser-create-ns.php' selected="selected">English</option>
            <option value='de/function.xml-parser-create-ns.php'>German</option>
            <option value='es/function.xml-parser-create-ns.php'>Spanish</option>
            <option value='fr/function.xml-parser-create-ns.php'>French</option>
            <option value='it/function.xml-parser-create-ns.php'>Italian</option>
            <option value='ja/function.xml-parser-create-ns.php'>Japanese</option>
            <option value='pt_BR/function.xml-parser-create-ns.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-parser-create-ns.php'>Russian</option>
            <option value='tr/function.xml-parser-create-ns.php'>Turkish</option>
            <option value='uk/function.xml-parser-create-ns.php'>Ukrainian</option>
            <option value='zh/function.xml-parser-create-ns.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-parser-create-ns" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_parser_create_ns</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_parser_create_ns</span> &mdash; <span class="dc-title">Create an XML parser with namespace support</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.xml-parser-create-ns-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xml_parser_create_ns</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$encoding</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$separator</code><span class="initializer"> = &quot;:&quot;</span></span>): <span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>xml_parser_create_ns()</strong></span> creates a new XML parser
   with XML namespace support and returns a <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span> 
   instance to be used by the other XML functions.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-parser-create-ns-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">encoding</code></dt>
     <dd>
      <p class="para">
       The input encoding is automatically detected, so that the
       <code class="parameter">encoding</code> parameter specifies only the output
       encoding. The default output charset is UTF-8. The supported
       encodings are <code class="literal">ISO-8859-1</code>, <code class="literal">UTF-8</code> and
       <code class="literal">US-ASCII</code>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">separator</code></dt>
     <dd>
      <p class="para">
       With a namespace aware parser tag parameters passed to the various
       handler functions will consist of namespace and tag name separated by
       the string specified in <code class="parameter">separator</code>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xml-parser-create-ns-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a new <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span> instance.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-parser-create-ns-changelog">
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
      <td>8.0.0</td>
      <td>
      This function returns an <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span> instance now;
      previously, a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was returned,  or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
      </td>
     </tr>

     <tr>
      <td>8.0.0</td>
      <td>
       <code class="parameter">encoding</code> is nullable now.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 seealso" id="refsect1-function.xml-parser-create-ns-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.xml-parser-create.php" class="function" rel="rdfs-seeAlso">xml_parser_create()</a> - Create an XML parser</span></li>
    <li><span class="function"><a href="function.xml-parser-free.php" class="function" rel="rdfs-seeAlso">xml_parser_free()</a> - Free an XML parser</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-parser-create-ns.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-parser-create-ns%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-parser-create-ns&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-parser-create-ns.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="22224">  <div class="votes">
    <div id="Vu22224">
    <a href="/manual/vote-note.php?id=22224&amp;page=function.xml-parser-create-ns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd22224">
    <a href="/manual/vote-note.php?id=22224&amp;page=function.xml-parser-create-ns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V22224" title="75% like this...">
    2
    </div>
  </div>
  <a href="#22224" class="name">
  <strong class="user"><em>jonnyNO at SPAM dot sanriowasteland dot net</em></strong></a><a class="genanchor" href="#22224"> &para;</a><div class="date" title="2002-06-11 05:49"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom22224">
<div class="phpcode"><code><span class="html">This is from the Expat Function Reference by Clark Cooper, which is a reference to the C api.   <br /><br />"XML_Parser XML_ParserCreateNS(const XML_Char*encoding, XML_Char sep)<br />Constructs a new parser that has namespace processing in effect. Namespace expanded element names and attribute names are returned as a concatenation of the namespace URI, sep, and the local part of the name. This means that you should pick a character for sep that can't be part of a legal URI."<br /><br />(from <a href="http://www.xml.com/pub/a/1999/09/expat/reference.html" rel="nofollow" target="_blank">http://www.xml.com/pub/a/1999/09/expat/reference.html</a>)<br /><br />So thats what this function is for.  Now you know.</span></code></div>
  </div>
 </div>
  <div class="note" id="123622">  <div class="votes">
    <div id="Vu123622">
    <a href="/manual/vote-note.php?id=123622&amp;page=function.xml-parser-create-ns&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123622">
    <a href="/manual/vote-note.php?id=123622&amp;page=function.xml-parser-create-ns&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123622" title="no votes...">
    0
    </div>
  </div>
  <a href="#123622" class="name">
  <strong class="user"><em>bishop at php dot net</em></strong></a><a class="genanchor" href="#123622"> &para;</a><div class="date" title="2019-02-17 04:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123622">
<div class="phpcode"><code><span class="html">Internals has proposed[1] changing this extension from resource-based to object-based. When this change is made, xml_parser_create_ns will return an object, not a resource. Application developers are encouraged to replace any checks for explicit success, like:<br /><br /><span class="default">&lt;?php<br />$res </span><span class="keyword">= </span><span class="default">xml_parser_create_ns</span><span class="keyword">(</span><span class="comment">/*...*/</span><span class="keyword">);<br />if (! </span><span class="default">is_resource</span><span class="keyword">(</span><span class="default">$res</span><span class="keyword">)) {<br />    </span><span class="comment">// ...<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;<br /></span><br />With a check for explicit failure:<br /><span class="default">&lt;?php<br />$res </span><span class="keyword">= </span><span class="default">xml_parser_create_ns</span><span class="keyword">(</span><span class="comment">/*...*/</span><span class="keyword">);<br />if (</span><span class="default">false </span><span class="keyword">=== </span><span class="default">$res</span><span class="keyword">) {<br />    </span><span class="comment">// ...<br /></span><span class="keyword">}<br /><br />[</span><span class="default">1</span><span class="keyword">]: </span><span class="default">https</span><span class="keyword">:</span><span class="comment">//marc.info/?l=php-internals&amp;m=154998365013373&amp;w=2</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xml-parser-create-ns&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-parser-create-ns.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.xml.php">XML Parser Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.xml-error-string.php" title="xml_&#8203;error_&#8203;string">xml_&#8203;error_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-byte-index.php" title="xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index">xml_&#8203;get_&#8203;current_&#8203;byte_&#8203;index</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-column-number.php" title="xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;column_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-current-line-number.php" title="xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number">xml_&#8203;get_&#8203;current_&#8203;line_&#8203;number</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-get-error-code.php" title="xml_&#8203;get_&#8203;error_&#8203;code">xml_&#8203;get_&#8203;error_&#8203;code</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse.php" title="xml_&#8203;parse">xml_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse-into-struct.php" title="xml_&#8203;parse_&#8203;into_&#8203;struct">xml_&#8203;parse_&#8203;into_&#8203;struct</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create.php" title="xml_&#8203;parser_&#8203;create">xml_&#8203;parser_&#8203;create</a>
                        </li>
                                                <li class="current">
                            <a href="function.xml-parser-create-ns.php" title="xml_&#8203;parser_&#8203;create_&#8203;ns">xml_&#8203;parser_&#8203;create_&#8203;ns</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-free.php" title="xml_&#8203;parser_&#8203;free">xml_&#8203;parser_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-get-option.php" title="xml_&#8203;parser_&#8203;get_&#8203;option">xml_&#8203;parser_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-set-option.php" title="xml_&#8203;parser_&#8203;set_&#8203;option">xml_&#8203;parser_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-character-data-handler.php" title="xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler">xml_&#8203;set_&#8203;character_&#8203;data_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-default-handler.php" title="xml_&#8203;set_&#8203;default_&#8203;handler">xml_&#8203;set_&#8203;default_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-element-handler.php" title="xml_&#8203;set_&#8203;element_&#8203;handler">xml_&#8203;set_&#8203;element_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-end-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;end_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-external-entity-ref-handler.php" title="xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler">xml_&#8203;set_&#8203;external_&#8203;entity_&#8203;ref_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-notation-decl-handler.php" title="xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;notation_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-object.php" title="xml_&#8203;set_&#8203;object">xml_&#8203;set_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-processing-instruction-handler.php" title="xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler">xml_&#8203;set_&#8203;processing_&#8203;instruction_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-start-namespace-decl-handler.php" title="xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;start_&#8203;namespace_&#8203;decl_&#8203;handler</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-set-unparsed-entity-decl-handler.php" title="xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler">xml_&#8203;set_&#8203;unparsed_&#8203;entity_&#8203;decl_&#8203;handler</a>
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
