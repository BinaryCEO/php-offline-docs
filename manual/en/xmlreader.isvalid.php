<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: XMLReader::isValid - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/xmlreader.isvalid.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/xmlreader.isvalid.php">
 <link rel="alternate" href="https://www.php.net/manual/en/xmlreader.isvalid.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.xmlreader.php">
 <link rel="prev" href="https://www.php.net/manual/en/xmlreader.getparserproperty.php">
 <link rel="next" href="https://www.php.net/manual/en/xmlreader.lookupnamespace.php">

 <link rel="alternate" href="https://www.php.net/manual/en/xmlreader.isvalid.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/xmlreader.isvalid.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/xmlreader.isvalid.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/xmlreader.isvalid.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/xmlreader.isvalid.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/xmlreader.isvalid.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/xmlreader.isvalid.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/xmlreader.isvalid.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/xmlreader.isvalid.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/xmlreader.isvalid.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/xmlreader.isvalid.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Indicates if the parsed document is valid" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: XMLReader::isValid - Manual" />
<meta name="twitter:description" content="Indicates if the parsed document is valid" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: XMLReader::isValid - Manual" />
<meta itemprop="description" content="Indicates if the parsed document is valid" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Indicates if the parsed document is valid" />

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
        <a href="xmlreader.lookupnamespace.php">
          XMLReader::lookupNamespace &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="xmlreader.getparserproperty.php">
          &laquo; XMLReader::getParserProperty        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.xmlreader.php'>XMLReader</a></li>      <li><a href='class.xmlreader.php'>XMLReader</a></li>      </ul>
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
            <option value='en/xmlreader.isvalid.php' selected="selected">English</option>
            <option value='de/xmlreader.isvalid.php'>German</option>
            <option value='es/xmlreader.isvalid.php'>Spanish</option>
            <option value='fr/xmlreader.isvalid.php'>French</option>
            <option value='it/xmlreader.isvalid.php'>Italian</option>
            <option value='ja/xmlreader.isvalid.php'>Japanese</option>
            <option value='pt_BR/xmlreader.isvalid.php'>Brazilian Portuguese</option>
            <option value='ru/xmlreader.isvalid.php'>Russian</option>
            <option value='tr/xmlreader.isvalid.php'>Turkish</option>
            <option value='uk/xmlreader.isvalid.php'>Ukrainian</option>
            <option value='zh/xmlreader.isvalid.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="xmlreader.isvalid" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">XMLReader::isValid</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">XMLReader::isValid</span> &mdash; <span class="dc-title">Indicates if the parsed document is valid</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-xmlreader.isvalid-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>XMLReader::isValid</strong></span>(): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   Returns a boolean indicating if the document being parsed is currently valid according to the DTD, or an XML or RelaxNG schema.
   If there is no schema, and the DTD validation option is not provided, this method will return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-xmlreader.isvalid-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">This function has no parameters.</p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-xmlreader.isvalid-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> when the document is valid or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> otherwise.
  </p>
 </div>

 <div class="refsect1 examples" id="refsect1-xmlreader.isvalid-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5915">
    <p><strong>Example #1 Validating XML</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">XMLReader</span><span style="color: #007700">::</span><span style="color: #0000BB">open</span><span style="color: #007700">(</span><span style="color: #DD0000">'examples/book-simple.xml'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// The validate parser option must be enabled for <br />// this method to work properly<br /></span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">setParserProperty</span><span style="color: #007700">(</span><span style="color: #0000BB">XMLReader</span><span style="color: #007700">::</span><span style="color: #0000BB">VALIDATE</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">isValid</span><span style="color: #007700">());<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 notes" id="refsect1-xmlreader.isvalid-notes">
  <h3 class="title">Notes</h3>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <span class="simpara">
    This checks the current node, not the entire document.
   </span>
  </p></blockquote>
 </div>

 <div class="refsect1 seealso" id="refsect1-xmlreader.isvalid-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="xmlreader.setparserproperty.php" class="methodname" rel="rdfs-seeAlso">XMLReader::setParserProperty()</a> - Set parser options</span></li>
    <li><span class="methodname"><a href="xmlreader.setrelaxngschema.php" class="methodname" rel="rdfs-seeAlso">XMLReader::setRelaxNGSchema()</a> - Set the filename or URI for a RelaxNG Schema</span></li>
    <li><span class="methodname"><a href="xmlreader.setrelaxngschemasource.php" class="methodname" rel="rdfs-seeAlso">XMLReader::setRelaxNGSchemaSource()</a> - Set the data containing a RelaxNG Schema</span></li>
    <li><span class="methodname"><a href="xmlreader.setschema.php" class="methodname" rel="rdfs-seeAlso">XMLReader::setSchema()</a> - Validate document against XSD</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/xmlreader/xmlreader/isvalid.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fxmlreader.isvalid%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=xmlreader.isvalid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xmlreader.isvalid.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="87935">  <div class="votes">
    <div id="Vu87935">
    <a href="/manual/vote-note.php?id=87935&amp;page=xmlreader.isvalid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87935">
    <a href="/manual/vote-note.php?id=87935&amp;page=xmlreader.isvalid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87935" title="63% like this...">
    3
    </div>
  </div>
  <a href="#87935" class="name">
  <strong class="user"><em>remy dot damour at laposte dot net</em></strong></a><a class="genanchor" href="#87935"> &para;</a><div class="date" title="2008-12-31 03:27"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87935">
<div class="phpcode"><code><span class="html">1. If you validate against relax-ng, no need to call $xml-&gt;setParserProperty(XMLReader::VALIDATE, true);<br /><br />2. Be aware that $xml-&gt;isValid() will return validity for currently active node (ie. node currently positioned using $xml-&gt;read()). It won't check validity of your entire tree at once, but rather on a step by step basis</span></code></div>
  </div>
 </div>
  <div class="note" id="127150">  <div class="votes">
    <div id="Vu127150">
    <a href="/manual/vote-note.php?id=127150&amp;page=xmlreader.isvalid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127150">
    <a href="/manual/vote-note.php?id=127150&amp;page=xmlreader.isvalid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127150" title="66% like this...">
    1
    </div>
  </div>
  <a href="#127150" class="name">
  <strong class="user"><em>me at lubu dot ch</em></strong></a><a class="genanchor" href="#127150"> &para;</a><div class="date" title="2022-05-31 09:54"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127150">
<div class="phpcode"><code><span class="html">Be aware that $xml-&gt;isValid() will return validity only for currently active node, so you have to loop trough the nodes.<br /><br />Here is a example how to validate a entire XML file against a XSD schema:<br /><br /><span class="default">&lt;?php<br /><br />$xmlReader </span><span class="keyword">= new </span><span class="default">\XMLReader</span><span class="keyword">();<br /></span><span class="default">$xmlReader</span><span class="keyword">-&gt;</span><span class="default">open</span><span class="keyword">(</span><span class="string">'./example.xml'</span><span class="keyword">);<br /></span><span class="default">$xmlReader</span><span class="keyword">-&gt;</span><span class="default">setParserProperty</span><span class="keyword">(</span><span class="default">\XMLReader</span><span class="keyword">::</span><span class="default">VALIDATE</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">$xmlReader</span><span class="keyword">-&gt;</span><span class="default">setSchema</span><span class="keyword">(</span><span class="string">'./schema.xsd'</span><span class="keyword">);<br /><br /></span><span class="default">\libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="default">$msgs </span><span class="keyword">= [];<br /><br />while (</span><span class="default">$xmlReader</span><span class="keyword">-&gt;</span><span class="default">read</span><span class="keyword">()) {<br />    if (!</span><span class="default">$xmlReader</span><span class="keyword">-&gt;</span><span class="default">isValid</span><span class="keyword">()) {<br />        </span><span class="default">$err </span><span class="keyword">= </span><span class="default">\libxml_get_last_error</span><span class="keyword">();<br />        if (</span><span class="default">$err </span><span class="keyword">&amp;&amp; </span><span class="default">$err </span><span class="keyword">instanceof </span><span class="default">\libXMLError</span><span class="keyword">) {<br />            </span><span class="default">$msgs</span><span class="keyword">[] = </span><span class="default">\trim</span><span class="keyword">(</span><span class="default">$err</span><span class="keyword">-&gt;</span><span class="default">message</span><span class="keyword">) . </span><span class="string">' on line ' </span><span class="keyword">. </span><span class="default">$err</span><span class="keyword">-&gt;</span><span class="default">line</span><span class="keyword">;<br />        }<br />    }<br />}<br /><br />if (</span><span class="default">$msgs</span><span class="keyword">) {<br />    throw new </span><span class="default">\Exception</span><span class="keyword">(</span><span class="string">"XML schema validation errors:\n - " </span><span class="keyword">. </span><span class="default">implode</span><span class="keyword">(</span><span class="string">"\n - "</span><span class="keyword">, </span><span class="default">array_unique</span><span class="keyword">(</span><span class="default">$msgs</span><span class="keyword">)));<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="95750">  <div class="votes">
    <div id="Vu95750">
    <a href="/manual/vote-note.php?id=95750&amp;page=xmlreader.isvalid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd95750">
    <a href="/manual/vote-note.php?id=95750&amp;page=xmlreader.isvalid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V95750" title="50% like this...">
    0
    </div>
  </div>
  <a href="#95750" class="name">
  <strong class="user"><em>zubin at trattonuovo dot com</em></strong></a><a class="genanchor" href="#95750"> &para;</a><div class="date" title="2010-01-20 03:00"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom95750">
<div class="phpcode"><code><span class="html">I encountered some problems to use isValid method with xml2assoc function.<br />I use this way to validate the entire xml file and put it into an associative array.<br /><br />$xml = new XMLReader();<br />if (!$xml-&gt;xml($xml_string, NULL, LIBXML_DTDVALID)) {<br />  echo "XML not valid: load error";<br />  exit();<br />}<br /><br />libxml_use_internal_errors(TRUE);<br /><br />$xml_array = xml2assoc($xml);<br /><br />$arErrors = libxml_get_errors();<br />$xml_errors = "";<br />foreach ($arErrors AS $xmlError) $xml_errors .= $xmlError-&gt;message;<br />if ($xml_errors != "") {<br />  echo "XML not valid: ".$xml_errors;<br />  exit();<br />}<br /><br />//all ok</span></code></div>
  </div>
 </div>
  <div class="note" id="80564">  <div class="votes">
    <div id="Vu80564">
    <a href="/manual/vote-note.php?id=80564&amp;page=xmlreader.isvalid&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80564">
    <a href="/manual/vote-note.php?id=80564&amp;page=xmlreader.isvalid&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80564" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80564" class="name">
  <strong class="user"><em>anzenews at volja dot net</em></strong></a><a class="genanchor" href="#80564"> &para;</a><div class="date" title="2008-01-22 10:50"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80564">
<div class="phpcode"><code><span class="html">This comment is only partially correct:
<br />"isValid() always returns false unless you enable checking for validity by $reader-&gt;setParserProperty(XMLReader::VALIDATE, true);"
<br />This enables DTD checking, but you can also check by using RelaxNG (see setRelaxNGSchema() and setRelaxNGSchemaSource()).
<br />
<br />And also, this is NOT correct:
<br />"If you just need to check if XML file is well formed, successful loading into XMLReader object is usually enough."
<br />It is not enough. Pull parsers operate on stream and if you have a large enough file they will not know it is well formed until it is read to the end. If you need to know if it is well formed or/and valid, read it till the end or validation error (you can use next() for fast reading if you don't care about contents).</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=xmlreader.isvalid&amp;repo=en&amp;redirect=https://www.php.net/manual/en/xmlreader.isvalid.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.xmlreader.php">XMLReader</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="xmlreader.close.php" title="close">close</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.expand.php" title="expand">expand</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromstream.php" title="fromStream">fromStream</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromstring.php" title="fromString">fromString</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.fromuri.php" title="fromUri">fromUri</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattribute.php" title="getAttribute">getAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattributeno.php" title="getAttributeNo">getAttributeNo</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getattributens.php" title="getAttributeNs">getAttributeNs</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.getparserproperty.php" title="getParserProperty">getParserProperty</a>
                        </li>
                                                <li class="current">
                            <a href="xmlreader.isvalid.php" title="isValid">isValid</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.lookupnamespace.php" title="lookupNamespace">lookupNamespace</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattribute.php" title="moveToAttribute">moveToAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattributeno.php" title="moveToAttributeNo">moveToAttributeNo</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoattributens.php" title="moveToAttributeNs">moveToAttributeNs</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetoelement.php" title="moveToElement">moveToElement</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetofirstattribute.php" title="moveToFirstAttribute">moveToFirstAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.movetonextattribute.php" title="moveToNextAttribute">moveToNextAttribute</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.open.php" title="open">open</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.read.php" title="read">read</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readinnerxml.php" title="readInnerXml">readInnerXml</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readouterxml.php" title="readOuterXml">readOuterXml</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.readstring.php" title="readString">readString</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setparserproperty.php" title="setParserProperty">setParserProperty</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setrelaxngschema.php" title="setRelaxNGSchema">setRelaxNGSchema</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setrelaxngschemasource.php" title="setRelaxNGSchemaSource">setRelaxNGSchemaSource</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.setschema.php" title="setSchema">setSchema</a>
                        </li>
                                                <li class="">
                            <a href="xmlreader.xml.php" title="XML">XML</a>
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
