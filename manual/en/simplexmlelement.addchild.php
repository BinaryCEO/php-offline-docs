<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLElement::addChild - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/simplexmlelement.addchild.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexmlelement.addchild.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.addchild.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.simplexmlelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.addattribute.php">
 <link rel="next" href="https://www.php.net/manual/en/simplexmlelement.asxml.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.addchild.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexmlelement.addchild.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexmlelement.addchild.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexmlelement.addchild.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexmlelement.addchild.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexmlelement.addchild.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexmlelement.addchild.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexmlelement.addchild.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexmlelement.addchild.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexmlelement.addchild.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexmlelement.addchild.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Adds a child element to the XML node" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLElement::addChild - Manual" />
<meta name="twitter:description" content="Adds a child element to the XML node" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLElement::addChild - Manual" />
<meta itemprop="description" content="Adds a child element to the XML node" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Adds a child element to the XML node" />

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
        <a href="simplexmlelement.asxml.php">
          SimpleXMLElement::asXML &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.addattribute.php">
          &laquo; SimpleXMLElement::addAttribute        </a>
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
            <option value='en/simplexmlelement.addchild.php' selected="selected">English</option>
            <option value='de/simplexmlelement.addchild.php'>German</option>
            <option value='es/simplexmlelement.addchild.php'>Spanish</option>
            <option value='fr/simplexmlelement.addchild.php'>French</option>
            <option value='it/simplexmlelement.addchild.php'>Italian</option>
            <option value='ja/simplexmlelement.addchild.php'>Japanese</option>
            <option value='pt_BR/simplexmlelement.addchild.php'>Brazilian Portuguese</option>
            <option value='ru/simplexmlelement.addchild.php'>Russian</option>
            <option value='tr/simplexmlelement.addchild.php'>Turkish</option>
            <option value='uk/simplexmlelement.addchild.php'>Ukrainian</option>
            <option value='zh/simplexmlelement.addchild.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexmlelement.addchild" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SimpleXMLElement::addChild</h1>
  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SimpleXMLElement::addChild</span> &mdash; <span class="dc-title">
   Adds a child element to the XML node
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-simplexmlelement.addchild-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SimpleXMLElement::addChild</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$qualifiedName</code></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$value</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespace</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>

  <p class="para rdfs-comment">
   Adds a child element to the node and returns a SimpleXMLElement of the child.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-simplexmlelement.addchild-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">qualifiedName</code></dt>
     <dd>
      <p class="para">
       The name of the child element to add.
      </p>
     </dd>
    
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       If specified, the value of the child element.
      </p>
     </dd>
    
    
     <dt><code class="parameter">namespace</code></dt>
     <dd>
      <p class="para">
       If specified, the namespace to which the child element belongs.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-simplexmlelement.addchild-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <code class="literal">addChild</code> method returns a <span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span>
   object representing the child added to the XML node on success; <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-simplexmlelement.addchild-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <p class="para">
     Listed examples may include <code class="literal">examples/simplexml-data.php</code>,
     which refers to the XML string found in the first example
     of the <a href="simplexml.examples-basic.php" class="link">basic usage</a> guide.
    </p>
   </p></blockquote>
   <div class="example" id="example-5874">
    <p><strong>Example #1 Add attributes and children to a SimpleXML element</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br /></span><span style="color: #007700">include </span><span style="color: #DD0000">'examples/simplexml-data.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$sxe </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xmlstr</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">, </span><span style="color: #DD0000">'documentary'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$movie </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'movie'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'title'</span><span style="color: #007700">, </span><span style="color: #DD0000">'PHP2: More Parser Stories'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'plot'</span><span style="color: #007700">, </span><span style="color: #DD0000">'This is all about the people who make it work.'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$characters </span><span style="color: #007700">= </span><span style="color: #0000BB">$movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'characters'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$character  </span><span style="color: #007700">= </span><span style="color: #0000BB">$characters</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'character'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'Mr. Parser'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$character</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'actor'</span><span style="color: #007700">, </span><span style="color: #DD0000">'John Doe'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$rating </span><span style="color: #007700">= </span><span style="color: #0000BB">$movie</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addChild</span><span style="color: #007700">(</span><span style="color: #DD0000">'rating'</span><span style="color: #007700">, </span><span style="color: #DD0000">'5'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$rating</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">addAttribute</span><span style="color: #007700">(</span><span style="color: #DD0000">'type'</span><span style="color: #007700">, </span><span style="color: #DD0000">'stars'</span><span style="color: #007700">);<br /> <br />echo </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asXML</span><span style="color: #007700">();<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">&lt;?xml version=&quot;1.0&quot; standalone=&quot;yes&quot;?&gt;
&lt;movies type=&quot;documentary&quot;&gt;
 &lt;movie&gt;
  &lt;title&gt;PHP: Behind the Parser&lt;/title&gt;
  &lt;characters&gt;
   &lt;character&gt;
    &lt;name&gt;Ms. Coder&lt;/name&gt;
    &lt;actor&gt;Onlivia Actora&lt;/actor&gt;
   &lt;/character&gt;
   &lt;character&gt;
    &lt;name&gt;Mr. Coder&lt;/name&gt;
    &lt;actor&gt;El Act&amp;#xD3;r&lt;/actor&gt;
   &lt;/character&gt;
  &lt;/characters&gt;
  &lt;plot&gt;
   So, this language. It&#039;s like, a programming language. Or is it a
   scripting language? All is revealed in this thrilling horror spoof
   of a documentary.
  &lt;/plot&gt;
  &lt;great-lines&gt;
   &lt;line&gt;PHP solves all my web problems&lt;/line&gt;
  &lt;/great-lines&gt;
  &lt;rating type=&quot;thumbs&quot;&gt;7&lt;/rating&gt;
  &lt;rating type=&quot;stars&quot;&gt;5&lt;/rating&gt;
 &lt;/movie&gt;
 &lt;movie&gt;
  &lt;title&gt;PHP2: More Parser Stories&lt;/title&gt;
  &lt;plot&gt;This is all about the people who make it work.&lt;/plot&gt;
  &lt;characters&gt;
   &lt;character&gt;
    &lt;name&gt;Mr. Parser&lt;/name&gt;
    &lt;actor&gt;John Doe&lt;/actor&gt;
   &lt;/character&gt;
  &lt;/characters&gt;
  &lt;rating type=&quot;stars&quot;&gt;5&lt;/rating&gt;
 &lt;/movie&gt;
&lt;/movies&gt;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-simplexmlelement.addchild-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="simplexmlelement.addattribute.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::addAttribute()</a> - Adds an attribute to the SimpleXML element</span></li>
    <li><a href="simplexml.examples-basic.php" class="xref">Basic SimpleXML usage</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmlelement/addChild.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexmlelement.addchild%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexmlelement.addchild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.addchild.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="112204">  <div class="votes">
    <div id="Vu112204">
    <a href="/manual/vote-note.php?id=112204&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112204">
    <a href="/manual/vote-note.php?id=112204&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112204" title="80% like this...">
    42
    </div>
  </div>
  <a href="#112204" class="name">
  <strong class="user"><em>frosty dot z at freesbee dot fr</em></strong></a><a class="genanchor" href="#112204"> &para;</a><div class="date" title="2013-05-16 02:31"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112204">
<div class="phpcode"><code><span class="html">To complete Volker Grabsch's comment, stating :<br />"Note that although addChild() escapes "&lt;" and "&gt;", it does not escape the ampersand "&amp;"."<br /><br />To work around that problem, you can use direct property assignment such as :<br /><br /><span class="default">&lt;?php<br />$xmlelement</span><span class="keyword">-&gt;</span><span class="default">value </span><span class="keyword">= </span><span class="string">'my value &lt; &gt; &amp;'</span><span class="keyword">;<br /></span><span class="comment">// results in &lt;value&gt;my value &amp;lt; &amp;gt; &amp;amp;&lt;/value&gt;<br /></span><span class="default">?&gt;<br /></span><br />instead of doing :<br /><br /><span class="default">&lt;?php<br />$xmlelement</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'value'</span><span class="keyword">, </span><span class="string">'my value &lt; &gt; &amp;'</span><span class="keyword">);<br /></span><span class="comment">// results in &lt;value&gt;my value &amp;lt; &amp;gt; &amp;&lt;/value&gt; (invalid XML)<br /></span><span class="default">?&gt;<br /></span><br />See also: <a href="http://stackoverflow.com/questions/552957" rel="nofollow" target="_blank">http://stackoverflow.com/questions/552957</a> (Rationale behind SimpleXMLElement's handling of text values in addChild and addAttribute)<br /><br />HTH</span></code></div>
  </div>
 </div>
  <div class="note" id="104458">  <div class="votes">
    <div id="Vu104458">
    <a href="/manual/vote-note.php?id=104458&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104458">
    <a href="/manual/vote-note.php?id=104458&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104458" title="80% like this...">
    27
    </div>
  </div>
  <a href="#104458" class="name">
  <strong class="user"><em>alex dot feraud at gmail dot com</em></strong></a><a class="genanchor" href="#104458"> &para;</a><div class="date" title="2011-06-16 02:52"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104458">
<div class="phpcode"><code><span class="html">Here is a class with more functions for SimpleXMLElement :
<br />
<br /><span class="default">&lt;?php
<br /></span><span class="comment">/**
<br /> *
<br /> * Extension for SimpleXMLElement
<br /> * @author Alexandre FERAUD
<br /> *
<br /> */
<br /></span><span class="keyword">class </span><span class="default">ExSimpleXMLElement </span><span class="keyword">extends </span><span class="default">SimpleXMLElement
<br /></span><span class="keyword">{
<br />    </span><span class="comment">/**
<br />     * Add CDATA text in a node
<br />     * @param string $cdata_text The CDATA value  to add
<br />     */
<br />  </span><span class="keyword">private function </span><span class="default">addCData</span><span class="keyword">(</span><span class="default">$cdata_text</span><span class="keyword">)
<br />  {
<br />   </span><span class="default">$node</span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">);
<br />   </span><span class="default">$no </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">;
<br />   </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$no</span><span class="keyword">-&gt;</span><span class="default">createCDATASection</span><span class="keyword">(</span><span class="default">$cdata_text</span><span class="keyword">));
<br />  }
<br />
<br />  </span><span class="comment">/**
<br />   * Create a child with CDATA value
<br />   * @param string $name The name of the child element to add.
<br />   * @param string $cdata_text The CDATA value of the child element.
<br />   */
<br />    </span><span class="keyword">public function </span><span class="default">addChildCData</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">,</span><span class="default">$cdata_text</span><span class="keyword">)
<br />    {
<br />        </span><span class="default">$child </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);
<br />        </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">addCData</span><span class="keyword">(</span><span class="default">$cdata_text</span><span class="keyword">);
<br />    }
<br />
<br />    </span><span class="comment">/**
<br />     * Add SimpleXMLElement code into a SimpleXMLElement
<br />     * @param SimpleXMLElement $append
<br />     */
<br />    </span><span class="keyword">public function </span><span class="default">appendXML</span><span class="keyword">(</span><span class="default">$append</span><span class="keyword">)
<br />    {
<br />        if (</span><span class="default">$append</span><span class="keyword">) {
<br />            if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">trim</span><span class="keyword">((string) </span><span class="default">$append</span><span class="keyword">))==</span><span class="default">0</span><span class="keyword">) {
<br />                </span><span class="default">$xml </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$append</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">());
<br />                foreach(</span><span class="default">$append</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">() as </span><span class="default">$child</span><span class="keyword">) {
<br />                    </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">appendXML</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);
<br />                }
<br />            } else {
<br />                </span><span class="default">$xml </span><span class="keyword">= </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$append</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">(), (string) </span><span class="default">$append</span><span class="keyword">);
<br />            }
<br />            foreach(</span><span class="default">$append</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">() as </span><span class="default">$n </span><span class="keyword">=&gt; </span><span class="default">$v</span><span class="keyword">) {
<br />                </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="default">$n</span><span class="keyword">, </span><span class="default">$v</span><span class="keyword">);
<br />            }
<br />        }
<br />    }
<br />}
<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="121840">  <div class="votes">
    <div id="Vu121840">
    <a href="/manual/vote-note.php?id=121840&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121840">
    <a href="/manual/vote-note.php?id=121840&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121840" title="83% like this...">
    4
    </div>
  </div>
  <a href="#121840" class="name">
  <strong class="user"><em>nwarap</em></strong></a><a class="genanchor" href="#121840"> &para;</a><div class="date" title="2017-11-07 02:46"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121840">
<div class="phpcode"><code><span class="html">Want to continue the ampersand (&amp;) chain problem.<br /><br />Sometimes, you would want to assign  (=) addChild.<br />This trick will helps you to do this.<br /><br /><span class="default">&lt;?php<br />$webOrders </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">'&lt;?xml version="1.0"?&gt;&lt;WebOrders&gt;&lt;/WebOrders&gt;'</span><span class="keyword">);<br /></span><span class="default">$webOrder </span><span class="keyword">= </span><span class="default">$webOrders</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'WebOrder'</span><span class="keyword">);<br /></span><span class="default">$product </span><span class="keyword">= </span><span class="default">$webOrder</span><span class="keyword">-&gt;</span><span class="default">addChild</span><span class="keyword">(</span><span class="string">'Product'</span><span class="keyword">);<br /></span><span class="default">$product</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">] = </span><span class="string">'T&amp;M'</span><span class="keyword">;<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="string">'price'</span><span class="keyword">, </span><span class="default">19.99</span><span class="keyword">);<br /></span><span class="default">$product</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="string">'qty'</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$webOrders</span><span class="keyword">-&gt;</span><span class="default">asXML</span><span class="keyword">());<br /></span><span class="default">?&gt;<br /></span><br />OUTPUT would be:<br /><br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;WebOrders&gt;<br />    &lt;WebOrder&gt;<br />        &lt;Product price="19.99" qty="2"&gt;T&amp;amp;M&lt;/Product&gt;<br />    &lt;/WebOrder&gt;<br />&lt;/WebOrders&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="117981">  <div class="votes">
    <div id="Vu117981">
    <a href="/manual/vote-note.php?id=117981&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117981">
    <a href="/manual/vote-note.php?id=117981&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117981" title="75% like this...">
    12
    </div>
  </div>
  <a href="#117981" class="name">
  <strong class="user"><em>johninen at gmail dot com</em></strong></a><a class="genanchor" href="#117981"> &para;</a><div class="date" title="2015-09-14 01:27"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117981">
<div class="phpcode"><code><span class="html">In the docs for google sitemaps it is required an element for mobile sitemaps that looks like this: &lt;mobile:mobile/&gt;<br /><br />I used some time to figure out how to make it, but it is quite simple when understood.<br /><br />$mobile_schema = '<a href="http://www.google.com/schemas/sitemap-mobile/1.0" rel="nofollow" target="_blank">http://www.google.com/schemas/sitemap-mobile/1.0</a>';<br /><br />//Create root element<br />$xml_mobile = new SimpleXMLElement('<br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br />&lt;urlset xmlns="<a href="http://www.sitemaps.org/schemas/sitemap/0.9" rel="nofollow" target="_blank">http://www.sitemaps.org/schemas/sitemap/0.9</a>" xmlns:mobile="'.$mobile_schema.'"&gt;&lt;/urlset&gt;<br />');<br /><br />//Add required children<br />$url_mobile = $xml_b_list_mobile-&gt;addChild('url');<br />$url_mobile-&gt;addChild('loc', 'your-mobile-site-url');<br />$url_mobile-&gt;addChild('mobile:mobile', null, $mobile_schema);<br /><br />For this to work properly the attribute xmlns:mobile must be set in the root node, and then used as namespace(third argument) when creating the mobile:mobile child with null as value.</span></code></div>
  </div>
 </div>
  <div class="note" id="103587">  <div class="votes">
    <div id="Vu103587">
    <a href="/manual/vote-note.php?id=103587&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103587">
    <a href="/manual/vote-note.php?id=103587&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103587" title="73% like this...">
    7
    </div>
  </div>
  <a href="#103587" class="name">
  <strong class="user"><em>Volker Grabsch</em></strong></a><a class="genanchor" href="#103587"> &para;</a><div class="date" title="2011-04-21 06:17"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103587">
<div class="phpcode"><code><span class="html">Note that although addChild() escapes "&lt;" and "&gt;", it does not escape the ampersand "&amp;".<br /><br />So addChild() is unsuited to handle user-defined input!<br /><br />Instead, you will have to replace all "&amp;" with "&amp;amp;" before calling addChild().<br /><br />Or, use htmlspecialchars() which also replaces other characters, but won't do any harm as addChild() won't replace those again.</span></code></div>
  </div>
 </div>
  <div class="note" id="128142">  <div class="votes">
    <div id="Vu128142">
    <a href="/manual/vote-note.php?id=128142&amp;page=simplexmlelement.addchild&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128142">
    <a href="/manual/vote-note.php?id=128142&amp;page=simplexmlelement.addchild&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128142" title="100% like this...">
    1
    </div>
  </div>
  <a href="#128142" class="name">
  <strong class="user"><em>fluxlicious at gmail dot com</em></strong></a><a class="genanchor" href="#128142"> &para;</a><div class="date" title="2023-01-23 11:18"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128142">
<div class="phpcode"><code><span class="html">The class below allows you to write CDATA and to add additional attributes.<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">SimpleXMLElementExtended </span><span class="keyword">extends </span><span class="default">\SimpleXMLElement<br /></span><span class="keyword">{<br />    public function </span><span class="default">addChildWithCData</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$value</span><span class="keyword">)<br />    {<br />        </span><span class="default">$child </span><span class="keyword">= </span><span class="default">parent</span><span class="keyword">::</span><span class="default">addChild</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">);<br />        </span><span class="default">$element </span><span class="keyword">= </span><span class="default">dom_import_simplexml</span><span class="keyword">(</span><span class="default">$child</span><span class="keyword">);<br />        </span><span class="default">$docOwner </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">ownerDocument</span><span class="keyword">;<br />        </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">appendChild</span><span class="keyword">(</span><span class="default">$docOwner</span><span class="keyword">-&gt;</span><span class="default">createCDATASection</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">));<br />        return </span><span class="default">$child</span><span class="keyword">;<br />    }<br />}<br /></span><span class="default">?&gt;<br /></span><br />Example:<br /><span class="default">&lt;?php<br />        $xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElementExtended</span><span class="keyword">(</span><span class="string">'&lt;xml&gt;&lt;/xml&gt;'</span><span class="keyword">);<br />        </span><span class="default">$content </span><span class="keyword">= </span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">addChildWithCData</span><span class="keyword">(</span><span class="string">'content'</span><span class="keyword">, </span><span class="string">'Title of the page'</span><span class="keyword">);<br />        </span><span class="default">$content</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="string">'id'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);<br />        </span><span class="default">$content</span><span class="keyword">-&gt;</span><span class="default">addAttribute</span><span class="keyword">(</span><span class="string">'enabled'</span><span class="keyword">, </span><span class="string">'true'</span><span class="keyword">);<br /><br />        </span><span class="comment">// Output:<br />        // &lt;xml&gt;<br />        //   &lt;content id="1" enabled="true"&gt;&lt;![CDATA[Title of the page]]&gt;&lt;/content&gt;<br />        // &lt;/xml&gt;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexmlelement.addchild&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.addchild.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="class.simplexmlelement.php">SimpleXMLElement</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="simplexmlelement.addattribute.php" title="addAttribute">addAttribute</a>
                        </li>
                                                <li class="current">
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
                                                <li class="">
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
