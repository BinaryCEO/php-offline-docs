<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLElement::__construct - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/simplexmlelement.construct.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexmlelement.construct.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.construct.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.simplexmlelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.children.php">
 <link rel="next" href="https://www.php.net/manual/en/simplexmlelement.count.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.construct.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexmlelement.construct.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexmlelement.construct.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexmlelement.construct.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexmlelement.construct.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexmlelement.construct.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexmlelement.construct.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexmlelement.construct.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexmlelement.construct.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexmlelement.construct.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexmlelement.construct.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Creates a new SimpleXMLElement object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLElement::__construct - Manual" />
<meta name="twitter:description" content="Creates a new SimpleXMLElement object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLElement::__construct - Manual" />
<meta itemprop="description" content="Creates a new SimpleXMLElement object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Creates a new SimpleXMLElement object" />

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
        <a href="simplexmlelement.count.php">
          SimpleXMLElement::count &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.children.php">
          &laquo; SimpleXMLElement::children        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.simplexml.php'>SimpleXML</a></li>      <li><a href='class.simplexmlelement.php'>SimpleXMLElement</a></li>      </ul>
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
            <option value='en/simplexmlelement.construct.php' selected="selected">English</option>
            <option value='de/simplexmlelement.construct.php'>German</option>
            <option value='es/simplexmlelement.construct.php'>Spanish</option>
            <option value='fr/simplexmlelement.construct.php'>French</option>
            <option value='it/simplexmlelement.construct.php'>Italian</option>
            <option value='ja/simplexmlelement.construct.php'>Japanese</option>
            <option value='pt_BR/simplexmlelement.construct.php'>Brazilian Portuguese</option>
            <option value='ru/simplexmlelement.construct.php'>Russian</option>
            <option value='tr/simplexmlelement.construct.php'>Turkish</option>
            <option value='uk/simplexmlelement.construct.php'>Ukrainian</option>
            <option value='zh/simplexmlelement.construct.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexmlelement.construct" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SimpleXMLElement::__construct</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SimpleXMLElement::__construct</span> &mdash; <span class="dc-title">
   Creates a new SimpleXMLElement object
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-simplexmlelement.construct-description">
  <h3 class="title">Description</h3>
  <div class="constructorsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SimpleXMLElement::__construct</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$data</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$options</code><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$dataIsURL</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = &quot;&quot;</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span><br>)</div>

  <p class="para rdfs-comment">
   Creates a new <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> object.
  </p>
 </div>

 
 <div class="refsect1 parameters" id="refsect1-simplexmlelement.construct-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">data</code></dt>
     <dd>
      <p class="para">
       A well-formed XML string or the path or URL to an XML document if 
       <code class="parameter">dataIsURL</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">options</code></dt>
     <dd>
      <p class="para">
       Optionally used to specify <a href="libxml.constants.php" class="link">additional
       Libxml parameters</a>, which affect reading of XML documents. Options which affect the
       output of XML documents (e.g. <strong><code><a href="libxml.constants.php#constant.libxml-noemptytag">LIBXML_NOEMPTYTAG</a></code></strong>) are silently ignored.
      </p>
      <blockquote class="note"><p><strong class="note">Note</strong>: 
       <p class="para">
        It may be necessary to pass <strong><code><a href="libxml.constants.php#constant.libxml-parsehuge">LIBXML_PARSEHUGE</a></code></strong>
        to be able to process deeply nested XML or very large text nodes.
       </p>
      </p></blockquote>
     </dd>
    
    
     <dt><code class="parameter">dataIsURL</code></dt>
     <dd>
      <p class="para">
       By default, <code class="parameter">dataIsURL</code> is <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>. Use <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> to
       specify that <code class="parameter">data</code> is a path or URL to an XML 
       document instead of <span class="type"><a href="language.types.string.php" class="type string">string</a></span> data.
      </p>
     </dd>
    
    
     <dt><code class="parameter">namespaceOrPrefix</code></dt>
     <dd>
      <p class="para">
       Namespace prefix or URI.
      </p>
     </dd>
    
    
     <dt><code class="parameter">isPrefix</code></dt>
     <dd>
      <p class="para">
       <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> if <code class="parameter">namespaceOrPrefix</code> is a prefix, <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if it&#039;s a URI;
       defaults to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 errors" id="refsect1-simplexmlelement.construct-errors">
  <h3 class="title">Errors/Exceptions</h3>
  <p class="para">
   Produces an <strong><code><a href="errorfunc.constants.php#constant.e-warning">E_WARNING</a></code></strong> error message for each error
   found in the XML data and additionally throws an <span class="classname"><a href="class.exception.php" class="classname">Exception</a></span> if the XML data
   could not be parsed.
  </p>
  <div class="tip"><strong class="tip">Tip</strong>
   <p class="para">
    Use <span class="function"><a href="function.libxml-use-internal-errors.php" class="function">libxml_use_internal_errors()</a></span> to suppress all XML
    errors, and <span class="function"><a href="function.libxml-get-errors.php" class="function">libxml_get_errors()</a></span> to iterate over them
    afterwards.
   </p>
  </div>
 </div>

 
 <div class="refsect1 examples" id="refsect1-simplexmlelement.construct-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Listed examples may include <code class="literal">examples/simplexml-data.php</code>,
     which refers to the XML string found in the first example
     of the <a href="simplexml.examples-basic.php" class="link">basic usage</a> guide.
    </p>
   </p></blockquote>
   <div class="example" id="example-5880">
    <p><strong>Example #1 Create a SimpleXMLElement object</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$sxe </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">movie</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">title</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">PHP: Behind the Parser</pre>
</div>
    </div>
   </div>
  </p>
  <p class="para">
   <div class="example" id="example-5881">
    <p><strong>Example #2 Create a SimpleXMLElement object from a URL</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$sxe </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.org/document.xml'</span><span style="color: #007700">, </span><span style="color: #0000BB">0</span><span style="color: #007700">, </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br />echo </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-simplexmlelement.construct-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>
    <li><span class="function"><a href="function.simplexml-load-string.php" class="function" rel="rdfs-seeAlso">simplexml_load_string()</a> - Interprets a string of XML into an object</span></li>
    <li><span class="function"><a href="function.simplexml-load-file.php" class="function" rel="rdfs-seeAlso">simplexml_load_file()</a> - Interprets an XML file into an object</span></li>
    <li><a href="simplexml.examples-errors.php" class="xref">Dealing with XML errors</a></li>
    <li><span class="function"><a href="function.libxml-use-internal-errors.php" class="function" rel="rdfs-seeAlso">libxml_use_internal_errors()</a> - Disable libxml errors and allow user to fetch error information as needed</span></li>
    <li><span class="function"><a href="function.libxml-set-streams-context.php" class="function" rel="rdfs-seeAlso">libxml_set_streams_context()</a> - Set the streams context for the next libxml document load or write</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmlelement/construct.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexmlelement.construct%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexmlelement.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.construct.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="121007">  <div class="votes">
    <div id="Vu121007">
    <a href="/manual/vote-note.php?id=121007&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121007">
    <a href="/manual/vote-note.php?id=121007&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121007" title="84% like this...">
    9
    </div>
  </div>
  <a href="#121007" class="name">
  <strong class="user"><em>rowan dot collins at gmail dot com</em></strong></a><a class="genanchor" href="#121007"> &para;</a><div class="date" title="2017-04-22 03:23"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom121007">
<div class="phpcode"><code><span class="html">The manual doesn't really explain what the $ns argument (and the accompanying $is_prefix) are for.<br /><br />What they do is similar to the -&gt;children() method: they set the context of the returned object to that namespace, so that access via -&gt;elementName and ['attributeName'] refer to elements and attributes in that namespace.<br /><br />In particular, they do *not* change the namespaces which exist on the document.<br /><br />See this example:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// This XML contains two elements called &lt;child&gt;<br />// One is in the namespace <a href="http://example.com," rel="nofollow" target="_blank">http://example.com,</a> with local prefix 'ws'<br />// The other has no namespace (no prefix, and no default namespace declared)<br /></span><span class="default">$xml </span><span class="keyword">= </span><span class="string">'&lt;ws:example xmlns:ws="<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>"&gt;&lt;child&gt;Not in namespace&lt;/child&gt;&lt;ws:child&gt;In example namespace&lt;/ws:child&gt;&lt;/ws:example&gt;'</span><span class="keyword">;<br /><br /></span><span class="default">$sx0 </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">);<br /></span><span class="default">$sx1 </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">'<a href="http://example.com" rel="nofollow" target="_blank">http://example.com</a>'</span><span class="keyword">);<br /></span><span class="default">$sx2 </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="default">0</span><span class="keyword">, </span><span class="default">false</span><span class="keyword">, </span><span class="string">'ws'</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br />echo </span><span class="string">"<br />    Without: </span><span class="keyword">{</span><span class="default">$sx0</span><span class="keyword">-&gt;</span><span class="default">child</span><span class="keyword">}</span><span class="string"><br />    By namespace: </span><span class="keyword">{</span><span class="default">$sx1</span><span class="keyword">-&gt;</span><span class="default">child</span><span class="keyword">}</span><span class="string"><br />    By prefix: </span><span class="keyword">{</span><span class="default">$sx2</span><span class="keyword">-&gt;</span><span class="default">child</span><span class="keyword">}</span><span class="string"><br />"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />Output:<br /><br /> Without: Not in namespace<br /> By namespace: In example namespace<br /> By prefix: In example namespace</span></code></div>
  </div>
 </div>
  <div class="note" id="79310">  <div class="votes">
    <div id="Vu79310">
    <a href="/manual/vote-note.php?id=79310&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd79310">
    <a href="/manual/vote-note.php?id=79310&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V79310" title="71% like this...">
    9
    </div>
  </div>
  <a href="#79310" class="name">
  <strong class="user"><em>tudor at culise dot net</em></strong></a><a class="genanchor" href="#79310"> &para;</a><div class="date" title="2007-11-20 03:35"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom79310">
<div class="phpcode"><code><span class="html">This class is extendable, but it's too bad that its constructor cannot be overriden (PHP says it's a final method). Thus the class should be wrapped using the delegation principle rather that extended.</span></code></div>
  </div>
 </div>
  <div class="note" id="119447">  <div class="votes">
    <div id="Vu119447">
    <a href="/manual/vote-note.php?id=119447&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119447">
    <a href="/manual/vote-note.php?id=119447&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119447" title="68% like this...">
    6
    </div>
  </div>
  <a href="#119447" class="name">
  <strong class="user"><em>ahmad dot mayahi at gmail dot com</em></strong></a><a class="genanchor" href="#119447"> &para;</a><div class="date" title="2016-06-07 09:36"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119447">
<div class="phpcode"><code><span class="html">You won't be able to load an XML file without root element:<br /><br />//This will throw an exception<br />$xml = new SimpleXMLElement('&lt;?xml version="1.0" encoding="UTF-8"?&gt;', null, false);<br /><br />//Here is the solution<br />$xml = new SimpleXMLElement('&lt;?xml version="1.0" encoding="UTF-8"?&gt;&lt;root&gt;&lt;/root&gt;', null, false);</span></code></div>
  </div>
 </div>
  <div class="note" id="126356">  <div class="votes">
    <div id="Vu126356">
    <a href="/manual/vote-note.php?id=126356&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126356">
    <a href="/manual/vote-note.php?id=126356&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126356" title="75% like this...">
    4
    </div>
  </div>
  <a href="#126356" class="name">
  <strong class="user"><em>info at ensostudio dot ru</em></strong></a><a class="genanchor" href="#126356"> &para;</a><div class="date" title="2021-08-20 04:22"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126356">
<div class="phpcode"><code><span class="html">Extended SimpleXMLElement:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">XmlElement </span><span class="keyword">extends </span><span class="default">\SimpleXMLElement<br /></span><span class="keyword">{<br />    public static function </span><span class="default">factory</span><span class="keyword">(</span><span class="default">string $root</span><span class="keyword">): </span><span class="default">self<br />    </span><span class="keyword">{<br />        return new static(</span><span class="string">'&lt;?xml version="1.0" encoding="UTF-8"?&gt;&lt;'</span><span class="keyword">.</span><span class="default">$root</span><span class="keyword">.</span><span class="string">'/&gt;'</span><span class="keyword">, </span><span class="default">LIBXML_BIGLINES </span><span class="keyword">| </span><span class="default">LIBXML_COMPACT</span><span class="keyword">);<br />    }<br /><br />    </span><span class="comment">/**<br />      * @param iterable $attributes An array of element attributes as name/value pairs<br />      * @return $this<br />      */<br />    </span><span class="keyword">public function </span><span class="default">addAttributes</span><span class="keyword">(</span><span class="default">iterable $attributes</span><span class="keyword">)<br />    {<br />        foreach (</span><span class="default">$attributes </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />      * @param string $name The sub-element name<br />      * @param string|array|null $valueOrAttributes The sub-element value or an array of attributes<br />      * @param string|null $namespace The sub-element namespace<br />      * @return static|null<br />      */<br />    </span><span class="keyword">public function </span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$valueOrAttributes </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">, </span><span class="default">$namespace </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">)<br />    {<br />        if (</span><span class="default">is_array</span><span class="keyword">(</span><span class="default">$valueOrAttributes</span><span class="keyword">)) {<br />            </span><span class="default">$child </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">$namespace</span><span class="keyword">);<br />            foreach (</span><span class="default">$valueOrAttributes </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />                </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />            }<br />        } else {<br />            </span><span class="default">$child </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$valueOrAttributes</span><span class="keyword">, </span><span class="default">$namespace</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$child</span><span class="keyword">;<br />    }<br /><br />    </span><span class="comment">/**<br />      * @param iterable $childs An array of sub-elements as name/value(or attributes) pairs<br />      * @return $this<br />      */<br />    </span><span class="keyword">public function </span><span class="default">addChilds</span><span class="keyword">(</span><span class="default">iterable $childs</span><span class="keyword">)<br />    {<br />        foreach (</span><span class="default">$childs </span><span class="keyword">as </span><span class="default">$name </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">);<br />        }<br /><br />        return </span><span class="default">$this</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115218">  <div class="votes">
    <div id="Vu115218">
    <a href="/manual/vote-note.php?id=115218&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115218">
    <a href="/manual/vote-note.php?id=115218&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115218" title="70% like this...">
    4
    </div>
  </div>
  <a href="#115218" class="name">
  <strong class="user"><em>bertolini dot cedric at me dot com</em></strong></a><a class="genanchor" href="#115218"> &para;</a><div class="date" title="2014-06-16 11:07"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115218">
<div class="phpcode"><code><span class="html">It's worth noting that the behavior of SimpleXmlElement::__construct is not exactly the same as simplexml_load_string, regarding libxml_use_internal_errors().<br /><br />In my case,<br /><br /><span class="default">&lt;?php<br />libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br />new </span><span class="default">\SimpleXmlElement</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />was still throwing error. But as soon as I switched to <br /><br /><span class="default">&lt;?php<br />libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">simplexml_load_string</span><span class="keyword">(</span><span class="default">$data</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />everything worked fine and I stopped getting an error.</span></code></div>
  </div>
 </div>
  <div class="note" id="103058">  <div class="votes">
    <div id="Vu103058">
    <a href="/manual/vote-note.php?id=103058&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103058">
    <a href="/manual/vote-note.php?id=103058&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103058" title="64% like this...">
    5
    </div>
  </div>
  <a href="#103058" class="name">
  <strong class="user"><em>kumarldh at gmail dot com</em></strong></a><a class="genanchor" href="#103058"> &para;</a><div class="date" title="2011-03-22 10:50"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103058">
<div class="phpcode"><code><span class="html">Using libxml_use_internal_errors() may suppress errors but Exception still requires decent handling. I used following code snippet.
<br />
<br /><span class="default">&lt;?php
<br />libxml_use_internal_errors</span><span class="keyword">(</span><span class="default">true</span><span class="keyword">);
<br />try{
<br />    </span><span class="default">$xmlToObject </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$notSoWellFormedXML</span><span class="keyword">);
<br />} catch (</span><span class="default">Exception $e</span><span class="keyword">){
<br />    echo </span><span class="string">'Please try again later...'</span><span class="keyword">;
<br />    exit();
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="92963">  <div class="votes">
    <div id="Vu92963">
    <a href="/manual/vote-note.php?id=92963&amp;page=simplexmlelement.construct&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd92963">
    <a href="/manual/vote-note.php?id=92963&amp;page=simplexmlelement.construct&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V92963" title="50% like this...">
    0
    </div>
  </div>
  <a href="#92963" class="name">
  <strong class="user"><em>uramihsayibok, gmail, com</em></strong></a><a class="genanchor" href="#92963"> &para;</a><div class="date" title="2009-08-16 06:52"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom92963">
<div class="phpcode"><code><span class="html">As I was filling out a bug report, I realized why (speculation here) the constructor is final: so that functions like simplexml_load_file and simplexml_load_string can work. I imagine the PHP-ized code looks something like
<br />
<br /><span class="default">&lt;?php
<br />
<br /></span><span class="keyword">function </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$class_name </span><span class="keyword">= </span><span class="string">"SimpleXMLElement"</span><span class="keyword">, </span><span class="default">$options </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">, </span><span class="default">$ns </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">, </span><span class="default">$is_prefix </span><span class="keyword">= </span><span class="default">false</span><span class="keyword">) {
<br />    return new </span><span class="default">$class_name</span><span class="keyword">(</span><span class="default">$filename</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">, </span><span class="default">$ns</span><span class="keyword">, </span><span class="default">$is_prefix</span><span class="keyword">);
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />If we were to use a different $class_name and change the constructor's definition these functions wouldn't work.
<br />
<br />There's no easy, sensible solution that keeps simplexml_load_file and simplexml_load_string.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexmlelement.construct&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.construct.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.simplexmlelement.php">SimpleXMLElement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="simplexmlelement.addattribute.php" title="addAttribute">addAttribute</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.addchild.php" title="addChild">addChild</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.asxml.php" title="asXML">asXML</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.attributes.php" title="attributes">attributes</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.children.php" title="children">children</a>
                        </li>
                                                <li class="current">
                            <a href="simplexmlelement.construct.php" title="_&#8203;_&#8203;construct">_&#8203;_&#8203;construct</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.count.php" title="count">count</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.current.php" title="current">current</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getdocnamespaces.php" title="getDocNamespaces">getDocNamespaces</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getname.php" title="getName">getName</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getnamespaces.php" title="getNamespaces">getNamespaces</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.getchildren.php" title="getChildren">getChildren</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.haschildren.php" title="hasChildren">hasChildren</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.key.php" title="key">key</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.next.php" title="next">next</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.registerxpathnamespace.php" title="registerXPathNamespace">registerXPathNamespace</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.rewind.php" title="rewind">rewind</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.savexml.php" title="saveXML">saveXML</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.tostring.php" title="_&#8203;_&#8203;toString">_&#8203;_&#8203;toString</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.valid.php" title="valid">valid</a>
                        </li>
                                                <li class="">
                            <a href="simplexmlelement.xpath.php" title="xpath">xpath</a>
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
