<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_parse - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-parse.php">
 <link rel="shorturl" href="https://www.php.net/xml-parse">
 <link rel="alternate" href="https://www.php.net/xml-parse" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-get-error-code.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-parse-into-struct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-parse.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-parse.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-parse.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-parse.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-parse.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-parse.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-parse.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-parse.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-parse.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-parse.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-parse.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Start parsing an XML document" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_parse - Manual" />
<meta name="twitter:description" content="Start parsing an XML document" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_parse - Manual" />
<meta itemprop="description" content="Start parsing an XML document" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Start parsing an XML document" />

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
        <a href="function.xml-parse-into-struct.php">
          xml_parse_into_struct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-get-error-code.php">
          &laquo; xml_get_error_code        </a>
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
            <option value='en/function.xml-parse.php' selected="selected">English</option>
            <option value='de/function.xml-parse.php'>German</option>
            <option value='es/function.xml-parse.php'>Spanish</option>
            <option value='fr/function.xml-parse.php'>French</option>
            <option value='it/function.xml-parse.php'>Italian</option>
            <option value='ja/function.xml-parse.php'>Japanese</option>
            <option value='pt_BR/function.xml-parse.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-parse.php'>Russian</option>
            <option value='tr/function.xml-parse.php'>Turkish</option>
            <option value='uk/function.xml-parse.php'>Ukrainian</option>
            <option value='zh/function.xml-parse.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-parse" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_parse</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_parse</span> &mdash; <span class="dc-title">Start parsing an XML document</span></p>

 </div>

 <div class="refsect1 description" id="refsect1-function.xml-parse-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>xml_parse</strong></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$is_final</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><a href="language.types.integer.php" class="type int">int</a></span></div>

  <p class="para rdfs-comment">
   <span class="function"><strong>xml_parse()</strong></span> parses an XML document. The handlers for
   the configured events are called as many times as necessary.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-parse-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">parser</code></dt>
     <dd>
      <p class="para">
       A reference to the XML parser to use.
      </p>
     </dd>
    
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       Chunk of data to parse.  A document may be parsed piece-wise by
       calling <span class="function"><strong>xml_parse()</strong></span> several times with new data,
       as long as the <code class="parameter">is_final</code> parameter is set and
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> when the last data is parsed.
      </p>
     </dd>
    
    
     <dt><code class="parameter">is_final</code></dt>
     <dd>
      <p class="para">
       If set and <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, <code class="parameter">data</code> is the last piece of
       data sent in this parse.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xml-parse-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns 1 on success or 0 on failure.
  </p>
  <p class="para">
   For unsuccessful parses, error information can be retrieved with
   <span class="function"><a href="function.xml-get-error-code.php" class="function">xml_get_error_code()</a></span>,
   <span class="function"><a href="function.xml-error-string.php" class="function">xml_error_string()</a></span>,
   <span class="function"><a href="function.xml-get-current-line-number.php" class="function">xml_get_current_line_number()</a></span>,
   <span class="function"><a href="function.xml-get-current-column-number.php" class="function">xml_get_current_column_number()</a></span> and
   <span class="function"><a href="function.xml-get-current-byte-index.php" class="function">xml_get_current_byte_index()</a></span>.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    Some errors (such as entity errors) are reported at the end of the data, thus only if
    <code class="parameter">is_final</code> is set and <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-parse-changelog">
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
  <code class="parameter">parser</code> expects an <span class="classname"><a href="class.xmlparser.php" class="classname">XMLParser</a></span>
  instance now; previously, a valid <code class="literal">xml</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>


 <div class="refsect1 examples" id="refsect1-function.xml-parse-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="xml_parse.example.chunked">
   <p><strong>Example #1 Chunked parsing of large XML documents</strong></p>
   <div class="example-contents"><p>
     This example shows how large XML documents can be read and parsed in
     chunks, so that it not necessary to keep the whole document in memory.
     Error handling is omitted for brevity.
   </p></div>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$stream </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-simple.xml'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$parser </span><span style="color: #007700">= </span><span style="color: #0000BB">xml_parser_create</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">xml_set_element_handler</span><span style="color: #007700">(<br />    </span><span style="color: #0000BB">$parser</span><span style="color: #007700">,<br />    function(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">$attributes</span><span style="color: #007700">) { echo </span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; },<br />    function(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$name</span><span style="color: #007700">) { echo </span><span style="color: #0000BB">$name</span><span style="color: #007700">, </span><span style="color: #0000BB">PHP_EOL</span><span style="color: #007700">; }<br />);<br /><br />while ((</span><span style="color: #0000BB">$data </span><span style="color: #007700">= </span><span style="color: #0000BB">fread</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">, </span><span style="color: #0000BB">16384</span><span style="color: #007700">))) {<br />    </span><span style="color: #0000BB">xml_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">); </span><span style="color: #FF8000">// parse the current chunk<br /></span><span style="color: #007700">}<br /></span><span style="color: #0000BB">xml_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">); </span><span style="color: #FF8000">// finalize parsing<br /></span><span style="color: #0000BB">xml_parser_free</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">fclose</span><span style="color: #007700">(</span><span style="color: #0000BB">$stream</span><span style="color: #007700">);</span></span></code></div>
   </div>

  </div>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-parse.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-parse%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-parse.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">2 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="79790">  <div class="votes">
    <div id="Vu79790">
    <a href="/manual/vote-note.php?id=79790&amp;page=function.xml-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79790">
    <a href="/manual/vote-note.php?id=79790&amp;page=function.xml-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79790" title="64% like this...">
    20
    </div>
  </div>
  <a href="#79790" class="name">
  <strong class="user"><em>neoyahuu at yahoo dot com</em></strong></a><a class="genanchor" href="#79790"> &para;</a><div class="date" title="2007-12-12 08:18"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79790">
<div class="phpcode"><code><span class="html">Instead of passing a URL, we can pass the XML content to this class (either you
<br /> want to use CURL, Socks or fopen to retrieve it first) and instead of using 
<br /> array, I'm using separator '|' to identify which data to get (in order to make 
<br /> it short to retrieve a complex XML data). Here is my class with built-in fopen 
<br /> which you can pass URL or you can pass the content instead :
<br />
<br />p/s : thanks to this great help page.
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">class </span><span class="default">xx_xml </span><span class="keyword">{
<br />
<br />    </span><span class="comment">// XML parser variables
<br />    </span><span class="keyword">var </span><span class="default">$parser</span><span class="keyword">;
<br />    var </span><span class="default">$name</span><span class="keyword">;
<br />    var </span><span class="default">$attr</span><span class="keyword">;
<br />    var </span><span class="default">$data  </span><span class="keyword">= array();
<br />    var </span><span class="default">$stack </span><span class="keyword">= array();
<br />    var </span><span class="default">$keys</span><span class="keyword">;
<br />    var </span><span class="default">$path</span><span class="keyword">;
<br />    
<br />    </span><span class="comment">// either you pass url atau contents. 
<br />    // Use 'url' or 'contents' for the parameter
<br />    </span><span class="keyword">var </span><span class="default">$type</span><span class="keyword">;
<br />
<br />    </span><span class="comment">// function with the default parameter value
<br />    </span><span class="keyword">function </span><span class="default">xx_xml</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">=</span><span class="string">'<a href="http://www.example.com" rel="nofollow" target="_blank">http://www.example.com</a>'</span><span class="keyword">, </span><span class="default">$type</span><span class="keyword">=</span><span class="string">'url'</span><span class="keyword">) {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">type </span><span class="keyword">= </span><span class="default">$type</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url  </span><span class="keyword">= </span><span class="default">$url</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parse</span><span class="keyword">();
<br />    }
<br />    
<br />    </span><span class="comment">// parse XML data
<br />    </span><span class="keyword">function </span><span class="default">parse</span><span class="keyword">()
<br />    {
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();
<br />        </span><span class="default">xml_set_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">);
<br />        </span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="string">'startXML'</span><span class="keyword">, </span><span class="string">'endXML'</span><span class="keyword">);
<br />        </span><span class="default">xml_set_character_data_handler</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="string">'charXML'</span><span class="keyword">);
<br />
<br />        </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);
<br />
<br />        if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">type </span><span class="keyword">== </span><span class="string">'url'</span><span class="keyword">) {
<br />            </span><span class="comment">// if use type = 'url' now we open the XML with fopen
<br />            
<br />            </span><span class="keyword">if (!(</span><span class="default">$fp </span><span class="keyword">= @</span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">))) {
<br />                </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">(</span><span class="string">"Cannot open </span><span class="keyword">{</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">}</span><span class="string">"</span><span class="keyword">);
<br />            }
<br />
<br />            while ((</span><span class="default">$data </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">8192</span><span class="keyword">))) {
<br />                if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">, </span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))) {
<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'XML error at line %d column %d'</span><span class="keyword">, 
<br />                    </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">), 
<br />                    </span><span class="default">xml_get_current_column_number</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">)));
<br />                }
<br />            }
<br />        } else if (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">type </span><span class="keyword">== </span><span class="string">'contents'</span><span class="keyword">) {
<br />            </span><span class="comment">// Now we can pass the contents, maybe if you want 
<br />            // to use CURL, SOCK or other method.
<br />            </span><span class="default">$lines </span><span class="keyword">= </span><span class="default">explode</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">url</span><span class="keyword">);
<br />            foreach (</span><span class="default">$lines </span><span class="keyword">as </span><span class="default">$val</span><span class="keyword">) {
<br />                if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$val</span><span class="keyword">) == </span><span class="string">''</span><span class="keyword">)
<br />                    continue;
<br />                </span><span class="default">$data </span><span class="keyword">= </span><span class="default">$val </span><span class="keyword">. </span><span class="string">"\n"</span><span class="keyword">;
<br />                if (!</span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)) {
<br />                    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">error</span><span class="keyword">(</span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">'XML error at line %d column %d'</span><span class="keyword">, 
<br />                    </span><span class="default">xml_get_current_line_number</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">), 
<br />                    </span><span class="default">xml_get_current_column_number</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">)));
<br />                }
<br />            }
<br />        }
<br />    }
<br />
<br />    function </span><span class="default">startXML</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attr</span><span class="keyword">)    {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">[</span><span class="default">$name</span><span class="keyword">] = array();
<br />        </span><span class="default">$keys </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;
<br />        </span><span class="default">$total </span><span class="keyword">= </span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">)-</span><span class="default">1</span><span class="keyword">;
<br />        </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />        foreach (</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)    {
<br />            if (</span><span class="default">count</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">) &gt; </span><span class="default">1</span><span class="keyword">) {
<br />                if (</span><span class="default">$total </span><span class="keyword">== </span><span class="default">$i</span><span class="keyword">)
<br />                    </span><span class="default">$keys </span><span class="keyword">.= </span><span class="default">$key</span><span class="keyword">;
<br />                else
<br />                    </span><span class="default">$keys </span><span class="keyword">.= </span><span class="default">$key </span><span class="keyword">. </span><span class="string">'|'</span><span class="keyword">; </span><span class="comment">// The saparator
<br />            </span><span class="keyword">}
<br />            else
<br />                </span><span class="default">$keys </span><span class="keyword">.= </span><span class="default">$key</span><span class="keyword">;
<br />            </span><span class="default">$i</span><span class="keyword">++;
<br />        }
<br />        if (</span><span class="default">array_key_exists</span><span class="keyword">(</span><span class="default">$keys</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">))    {
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$keys</span><span class="keyword">][] = </span><span class="default">$attr</span><span class="keyword">;
<br />        }    else
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$keys</span><span class="keyword">] = </span><span class="default">$attr</span><span class="keyword">;
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys </span><span class="keyword">= </span><span class="default">$keys</span><span class="keyword">;
<br />    }
<br />
<br />    function </span><span class="default">endXML</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">)    {
<br />        </span><span class="default">end</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">);
<br />        if (</span><span class="default">key</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">) == </span><span class="default">$name</span><span class="keyword">)
<br />            </span><span class="default">array_pop</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">stack</span><span class="keyword">);
<br />    }
<br />
<br />    function </span><span class="default">charXML</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">)    {
<br />        if (</span><span class="default">trim</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">) != </span><span class="string">''</span><span class="keyword">)
<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data</span><span class="keyword">[</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">keys</span><span class="keyword">][</span><span class="string">'data'</span><span class="keyword">][] = </span><span class="default">trim</span><span class="keyword">(</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"\n"</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$data</span><span class="keyword">));
<br />    }
<br />
<br />    function </span><span class="default">error</span><span class="keyword">(</span><span class="default">$msg</span><span class="keyword">)    {
<br />        echo </span><span class="string">"&lt;div align=\"center\"&gt;
<br />            &lt;font color=\"red\"&gt;&lt;b&gt;Error: </span><span class="default">$msg</span><span class="string">&lt;/b&gt;&lt;/font&gt;
<br />            &lt;/div&gt;"</span><span class="keyword">;
<br />        exit();
<br />    }
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />And example of retrieving XML data:
<br />p/s: example use to retrieve weather
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">include_once </span><span class="string">"xx_xml.class.php"</span><span class="keyword">;
<br />
<br /></span><span class="comment">// Im using simple curl (the original is in class) to get the contents
<br />
<br /></span><span class="default">$pageurl </span><span class="keyword">= </span><span class="string">"<a href="http://xml.weather.yahoo.com/forecastrss?p=MYXX0008&amp;u=c" rel="nofollow" target="_blank">http://xml.weather.yahoo.com/forecastrss?p=MYXX0008&amp;u=c</a>"</span><span class="keyword">;
<br /></span><span class="default">curl_setopt</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br /></span><span class="default">curl_setopt </span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">CURLOPT_URL</span><span class="keyword">, </span><span class="default">$pageurl </span><span class="keyword">);
<br /></span><span class="default">$thecontents </span><span class="keyword">= </span><span class="default">curl_exec </span><span class="keyword">( </span><span class="default">$ch </span><span class="keyword">);
<br /></span><span class="default">curl_close</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);
<br />
<br /></span><span class="comment">// We want to pass only a ready XML content instead of URL
<br />// But if you want to use URL , skip the curl functions above and use this 
<br />// $xx4 = new xx_xml("url here",'url');
<br />
<br /></span><span class="default">$xx4 </span><span class="keyword">= new </span><span class="default">xx_xml</span><span class="keyword">(</span><span class="default">$thecontents</span><span class="keyword">,</span><span class="string">'contents'</span><span class="keyword">); 
<br /></span><span class="comment">// As you can see, we use saparator '|' instead of long array
<br /></span><span class="default">$Code </span><span class="keyword">= </span><span class="default">$xx4</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">[</span><span class="string">'rss|channel|item|yweather:condition'</span><span class="keyword">][</span><span class="string">'code'</span><span class="keyword">] ;
<br /></span><span class="default">$Celcius </span><span class="keyword">= </span><span class="default">$xx4</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">[</span><span class="string">'rss|channel|item|yweather:condition'</span><span class="keyword">][</span><span class="string">'temp'</span><span class="keyword">] ;
<br /></span><span class="default">$Text </span><span class="keyword">= </span><span class="default">$xx4</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">[</span><span class="string">'rss|channel|item|yweather:condition'</span><span class="keyword">][</span><span class="string">'text'</span><span class="keyword">] ;
<br /></span><span class="default">$Cityname </span><span class="keyword">= </span><span class="default">$xx4</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">[</span><span class="string">'rss|channel|yweather:location'</span><span class="keyword">][</span><span class="string">'city'</span><span class="keyword">] ;
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />Hope this helps.</span></code></div>
  </div>
 </div>
  <div class="note" id="87920">  <div class="votes">
    <div id="Vu87920">
    <a href="/manual/vote-note.php?id=87920&amp;page=function.xml-parse&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87920">
    <a href="/manual/vote-note.php?id=87920&amp;page=function.xml-parse&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87920" title="53% like this...">
    5
    </div>
  </div>
  <a href="#87920" class="name">
  <strong class="user"><em>lz_speedy at web dot de</em></strong></a><a class="genanchor" href="#87920"> &para;</a><div class="date" title="2008-12-30 10:20"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87920">
<div class="phpcode"><code><span class="html">Best seen xml2array function ever<br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">xml2array</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="default">$get_attributes </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">, </span><span class="default">$priority </span><span class="keyword">= </span><span class="string">'tag'</span><span class="keyword">)<br />{<br />    </span><span class="default">$contents </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;<br />    if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">'xml_parser_create'</span><span class="keyword">))<br />    {<br />        return array ();<br />    }<br />    </span><span class="default">$parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">(</span><span class="string">''</span><span class="keyword">);<br />    if (!(</span><span class="default">$fp </span><span class="keyword">= @ </span><span class="default">fopen</span><span class="keyword">(</span><span class="default">$url</span><span class="keyword">, </span><span class="string">'rb'</span><span class="keyword">)))<br />    {<br />        return array ();<br />    }<br />    while (!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">))<br />    {<br />        </span><span class="default">$contents </span><span class="keyword">.= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">, </span><span class="default">8192</span><span class="keyword">);<br />    }<br />    </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">);<br />    </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">XML_OPTION_TARGET_ENCODING</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">);<br />    </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">XML_OPTION_CASE_FOLDING</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">);<br />    </span><span class="default">xml_parser_set_option</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">XML_OPTION_SKIP_WHITE</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />    </span><span class="default">xml_parse_into_struct</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">trim</span><span class="keyword">(</span><span class="default">$contents</span><span class="keyword">), </span><span class="default">$xml_values</span><span class="keyword">);<br />    </span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">);<br />    if (!</span><span class="default">$xml_values</span><span class="keyword">)<br />        return; </span><span class="comment">//Hmm...<br />    </span><span class="default">$xml_array </span><span class="keyword">= array ();<br />    </span><span class="default">$parents </span><span class="keyword">= array ();<br />    </span><span class="default">$opened_tags </span><span class="keyword">= array ();<br />    </span><span class="default">$arr </span><span class="keyword">= array ();<br />    </span><span class="default">$current </span><span class="keyword">= &amp; </span><span class="default">$xml_array</span><span class="keyword">;<br />    </span><span class="default">$repeated_tag_index </span><span class="keyword">= array (); <br />    foreach (</span><span class="default">$xml_values </span><span class="keyword">as </span><span class="default">$data</span><span class="keyword">)<br />    {<br />        unset (</span><span class="default">$attributes</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />        </span><span class="default">extract</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br />        </span><span class="default">$result </span><span class="keyword">= array ();<br />        </span><span class="default">$attributes_data </span><span class="keyword">= array ();<br />        if (isset (</span><span class="default">$value</span><span class="keyword">))<br />        {<br />            if (</span><span class="default">$priority </span><span class="keyword">== </span><span class="string">'tag'</span><span class="keyword">)<br />                </span><span class="default">$result </span><span class="keyword">= </span><span class="default">$value</span><span class="keyword">;<br />            else<br />                </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'value'</span><span class="keyword">] = </span><span class="default">$value</span><span class="keyword">;<br />        }<br />        if (isset (</span><span class="default">$attributes</span><span class="keyword">) and </span><span class="default">$get_attributes</span><span class="keyword">)<br />        {<br />            foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$attr </span><span class="keyword">=&gt; </span><span class="default">$val</span><span class="keyword">)<br />            {<br />                if (</span><span class="default">$priority </span><span class="keyword">== </span><span class="string">'tag'</span><span class="keyword">)<br />                    </span><span class="default">$attributes_data</span><span class="keyword">[</span><span class="default">$attr</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">;<br />                else<br />                    </span><span class="default">$result</span><span class="keyword">[</span><span class="string">'attr'</span><span class="keyword">][</span><span class="default">$attr</span><span class="keyword">] = </span><span class="default">$val</span><span class="keyword">; </span><span class="comment">//Set all the attributes in a array called 'attr'<br />            </span><span class="keyword">}<br />        }<br />        if (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"open"</span><span class="keyword">)<br />        { <br />            </span><span class="default">$parent</span><span class="keyword">[</span><span class="default">$level </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">] = &amp; </span><span class="default">$current</span><span class="keyword">;<br />            if (!</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">) or (!</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$tag</span><span class="keyword">, </span><span class="default">array_keys</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">))))<br />            {<br />                </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">] = </span><span class="default">$result</span><span class="keyword">;<br />                if (</span><span class="default">$attributes_data</span><span class="keyword">)<br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">] = </span><span class="default">$attributes_data</span><span class="keyword">;<br />                </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                </span><span class="default">$current </span><span class="keyword">= &amp; </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">];<br />            }<br />            else<br />            {<br />                if (isset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]))<br />                {<br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">]] = </span><span class="default">$result</span><span class="keyword">;<br />                    </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">]++;<br />                }<br />                else<br />                { <br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">] = array (<br />                        </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">],<br />                        </span><span class="default">$result<br />                    </span><span class="keyword">); <br />                    </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] = </span><span class="default">2</span><span class="keyword">;<br />                    if (isset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">]))<br />                    {<br />                        </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="string">'0_attr'</span><span class="keyword">] = </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">];<br />                        unset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">]);<br />                    }<br />                }<br />                </span><span class="default">$last_item_index </span><span class="keyword">= </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] - </span><span class="default">1</span><span class="keyword">;<br />                </span><span class="default">$current </span><span class="keyword">= &amp; </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">$last_item_index</span><span class="keyword">];<br />            }<br />        }<br />        elseif (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">"complete"</span><span class="keyword">)<br />        {<br />            if (!isset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">]))<br />            {<br />                </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">] = </span><span class="default">$result</span><span class="keyword">;<br />                </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                if (</span><span class="default">$priority </span><span class="keyword">== </span><span class="string">'tag' </span><span class="keyword">and </span><span class="default">$attributes_data</span><span class="keyword">)<br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">] = </span><span class="default">$attributes_data</span><span class="keyword">;<br />            }<br />            else<br />            {<br />                if (isset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">0</span><span class="keyword">]) and </span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">]))<br />                {<br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">]] = </span><span class="default">$result</span><span class="keyword">;<br />                    if (</span><span class="default">$priority </span><span class="keyword">== </span><span class="string">'tag' </span><span class="keyword">and </span><span class="default">$get_attributes </span><span class="keyword">and </span><span class="default">$attributes_data</span><span class="keyword">)<br />                    {<br />                        </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] . </span><span class="string">'_attr'</span><span class="keyword">] = </span><span class="default">$attributes_data</span><span class="keyword">;<br />                    }<br />                    </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">]++;<br />                }<br />                else<br />                {<br />                    </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">] = array (<br />                        </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">],<br />                        </span><span class="default">$result<br />                    </span><span class="keyword">); <br />                    </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] = </span><span class="default">1</span><span class="keyword">;<br />                    if (</span><span class="default">$priority </span><span class="keyword">== </span><span class="string">'tag' </span><span class="keyword">and </span><span class="default">$get_attributes</span><span class="keyword">)<br />                    {<br />                        if (isset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">]))<br />                        { <br />                            </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="string">'0_attr'</span><span class="keyword">] = </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">];<br />                            unset (</span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_attr'</span><span class="keyword">]);<br />                        }<br />                        if (</span><span class="default">$attributes_data</span><span class="keyword">)<br />                        {<br />                            </span><span class="default">$current</span><span class="keyword">[</span><span class="default">$tag</span><span class="keyword">][</span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">] . </span><span class="string">'_attr'</span><span class="keyword">] = </span><span class="default">$attributes_data</span><span class="keyword">;<br />                        }<br />                    }<br />                    </span><span class="default">$repeated_tag_index</span><span class="keyword">[</span><span class="default">$tag </span><span class="keyword">. </span><span class="string">'_' </span><span class="keyword">. </span><span class="default">$level</span><span class="keyword">]++; </span><span class="comment">//0 and 1 index is already taken<br />                </span><span class="keyword">}<br />            }<br />        }<br />        elseif (</span><span class="default">$type </span><span class="keyword">== </span><span class="string">'close'</span><span class="keyword">)<br />        {<br />            </span><span class="default">$current </span><span class="keyword">= &amp; </span><span class="default">$parent</span><span class="keyword">[</span><span class="default">$level </span><span class="keyword">-</span><span class="default">1</span><span class="keyword">];<br />        }<br />    }<br />    return (</span><span class="default">$xml_array</span><span class="keyword">);<br />}<br /></span><span class="default">?&gt;<br /></span><br />Returns a well formed array like the structure of the xml-document<br /><br />&lt;root&gt;<br /> &lt;child1&gt;<br />  &lt;child1child1/&gt;<br /> &lt;/child1&gt;<br />&lt;/root&gt;<br /><br />create an array like <br />array[root][child1][child1child1]<br /><br />lg</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xml-parse&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-parse.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
                            <a href="function.xml-parse.php" title="xml_&#8203;parse">xml_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parse-into-struct.php" title="xml_&#8203;parse_&#8203;into_&#8203;struct">xml_&#8203;parse_&#8203;into_&#8203;struct</a>
                        </li>
                                                <li class="">
                            <a href="function.xml-parser-create.php" title="xml_&#8203;parser_&#8203;create">xml_&#8203;parser_&#8203;create</a>
                        </li>
                                                <li class="">
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
