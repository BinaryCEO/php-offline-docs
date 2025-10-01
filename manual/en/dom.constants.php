<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Predefined Constants - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/dom.constants.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/dom.constants.php">
 <link rel="alternate" href="https://www.php.net/manual/en/dom.constants.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/book.dom.php">
 <link rel="prev" href="https://www.php.net/manual/en/dom.installation.php">
 <link rel="next" href="https://www.php.net/manual/en/dom.examples.php">

 <link rel="alternate" href="https://www.php.net/manual/en/dom.constants.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/dom.constants.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/dom.constants.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/dom.constants.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/dom.constants.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/dom.constants.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/dom.constants.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/dom.constants.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/dom.constants.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/dom.constants.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/dom.constants.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Predefined Constants" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Predefined Constants - Manual" />
<meta name="twitter:description" content="Predefined Constants" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Predefined Constants - Manual" />
<meta itemprop="description" content="Predefined Constants" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Predefined Constants" />

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
        <a href="dom.examples.php">
          Examples &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="dom.installation.php">
          &laquo; Installation        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.xml.php'>XML Manipulation</a></li>      <li><a href='book.dom.php'>DOM</a></li>      </ul>
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
            <option value='en/dom.constants.php' selected="selected">English</option>
            <option value='de/dom.constants.php'>German</option>
            <option value='es/dom.constants.php'>Spanish</option>
            <option value='fr/dom.constants.php'>French</option>
            <option value='it/dom.constants.php'>Italian</option>
            <option value='ja/dom.constants.php'>Japanese</option>
            <option value='pt_BR/dom.constants.php'>Brazilian Portuguese</option>
            <option value='ru/dom.constants.php'>Russian</option>
            <option value='tr/dom.constants.php'>Turkish</option>
            <option value='uk/dom.constants.php'>Ukrainian</option>
            <option value='zh/dom.constants.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="dom.constants" class="chapter">
 <h1 class="title">Predefined Constants</h1>

 <p class="simpara">
The constants below are defined by this extension, and
will only be available when the extension has either
been compiled into PHP or dynamically loaded at runtime.
</p>
  <table class="doctable table">
   <caption><strong>XML constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constants</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.xml-element-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-element-node">XML_ELEMENT_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>1</td>
      <td>Node is a <span class="classname"><a href="class.domelement.php" class="classname">DOMElement</a></span> / <span class="classname"><a href="class.dom-element.php" class="classname">Dom\Element</a></span></td>
     </tr>

     <tr id="constant.xml-attribute-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-node">XML_ATTRIBUTE_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>2</td>
      <td>Node is a <span class="classname"><a href="class.domattr.php" class="classname">DOMAttr</a></span> / <span class="classname"><a href="class.dom-attr.php" class="classname">Dom\Attr</a></span></td>
     </tr>

     <tr id="constant.xml-text-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-text-node">XML_TEXT_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>3</td>
      <td>Node is a <span class="classname"><a href="class.domtext.php" class="classname">DOMText</a></span> / <span class="classname"><a href="class.dom-text.php" class="classname">Dom\Text</a></span></td>
     </tr>

     <tr id="constant.xml-cdata-section-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-cdata-section-node">XML_CDATA_SECTION_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>4</td>
      <td>Node is a <span class="classname"><a href="class.domcharacterdata.php" class="classname">DOMCharacterData</a></span> / <span class="classname"><a href="class.dom-characterdata.php" class="classname">Dom\CharacterData</a></span></td>
     </tr>

     <tr id="constant.xml-entity-ref-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-entity-ref-node">XML_ENTITY_REF_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>5</td>
      <td>Node is a <span class="classname"><a href="class.domentityreference.php" class="classname">DOMEntityReference</a></span> / <span class="classname"><a href="class.dom-entityreference.php" class="classname">Dom\EntityReference</a></span></td>
     </tr>

     <tr id="constant.xml-entity-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-entity-node">XML_ENTITY_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>6</td>
      <td>Node is a <span class="classname"><a href="class.domentity.php" class="classname">DOMEntity</a></span> / <span class="classname"><a href="class.dom-entity.php" class="classname">Dom\Entity</a></span></td>
     </tr>

     <tr id="constant.xml-pi-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-pi-node">XML_PI_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>7</td>
      <td>Node is a <span class="classname"><a href="class.domprocessinginstruction.php" class="classname">DOMProcessingInstruction</a></span> / <span class="classname"><a href="class.dom-processinginstruction.php" class="classname">Dom\ProcessingInstruction</a></span></td>
     </tr>

     <tr id="constant.xml-comment-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-comment-node">XML_COMMENT_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>8</td>
      <td>Node is a <span class="classname"><a href="class.domcomment.php" class="classname">DOMComment</a></span> / <span class="classname"><a href="class.dom-comment.php" class="classname">Dom\Comment</a></span></td>
     </tr>

     <tr id="constant.xml-document-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-document-node">XML_DOCUMENT_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>9</td>
      <td>Node is a <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span> / <span class="classname"><a href="class.dom-document.php" class="classname">Dom\Document</a></span></td>
     </tr>

     <tr id="constant.xml-document-type-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-document-type-node">XML_DOCUMENT_TYPE_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>10</td>
      <td>Node is a <span class="classname"><a href="class.domdocumenttype.php" class="classname">DOMDocumentType</a></span> / <span class="classname"><a href="class.dom-documenttype.php" class="classname">Dom\DocumentType</a></span></td>
     </tr>

     <tr id="constant.xml-document-frag-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-document-frag-node">XML_DOCUMENT_FRAG_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>11</td>
      <td>Node is a <span class="classname"><a href="class.domdocumentfragment.php" class="classname">DOMDocumentFragment</a></span> / <span class="classname"><a href="class.dom-documentfragment.php" class="classname">Dom\DocumentFragment</a></span></td>
     </tr>

     <tr id="constant.xml-notation-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-notation-node">XML_NOTATION_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>12</td>
      <td>Node is a <span class="classname"><a href="class.domnotation.php" class="classname">DOMNotation</a></span> / <span class="classname"><a href="class.dom-notation.php" class="classname">Dom\Notation</a></span></td>
     </tr>

     <tr id="constant.xml-html-document-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-html-document-node">XML_HTML_DOCUMENT_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>13</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-dtd-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-dtd-node">XML_DTD_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>14</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-element-decl-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-element-decl-node">XML_ELEMENT_DECL_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>15</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-decl-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-decl-node">XML_ATTRIBUTE_DECL_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>16</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-entity-decl-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-entity-decl-node">XML_ENTITY_DECL_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>17</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-namespace-decl-node">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-namespace-decl-node">XML_NAMESPACE_DECL_NODE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>18</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-cdata">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-cdata">XML_ATTRIBUTE_CDATA</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>1</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-id">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-id">XML_ATTRIBUTE_ID</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>2</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-idref">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-idref">XML_ATTRIBUTE_IDREF</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>3</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-idrefs">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-idrefs">XML_ATTRIBUTE_IDREFS</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>4</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-entity">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-entity">XML_ATTRIBUTE_ENTITY</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>5</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-nmtoken">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-nmtoken">XML_ATTRIBUTE_NMTOKEN</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>7</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-nmtokens">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-nmtokens">XML_ATTRIBUTE_NMTOKENS</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>8</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-enumeration">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-enumeration">XML_ATTRIBUTE_ENUMERATION</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>9</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-attribute-notation">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-attribute-notation">XML_ATTRIBUTE_NOTATION</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>10</td>
      <td class="empty">&nbsp;</td>
     </tr>

     <tr id="constant.xml-local-namespace">
      <td>
       <strong><code><a href="dom.constants.php#constant.xml-local-namespace">XML_LOCAL_NAMESPACE</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td class="empty">&nbsp;</td>
      <td>A namespace declaration node.</td>
     </tr>

    </tbody>
   
  </table>

  <table class="doctable table">
   <caption><strong>HTML constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constants</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.dom-html-no-default-ns">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-html-no-default-ns">Dom\HTML_NO_DEFAULT_NS</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>
       <span class="simpara">
        This disables setting the namespace of elements during parsing when
        using <span class="classname"><a href="class.dom-htmldocument.php" class="classname">Dom\HTMLDocument</a></span>.
        This exists for backwards compatibility with
        <span class="classname"><a href="class.domdocument.php" class="classname">DOMDocument</a></span>.
       </span>
       <div class="caution"><strong class="caution">Caution</strong>
        <p class="simpara">
         Some DOM methods depend on the <abbr title="Hyper Text Markup Language">HTML</abbr> namespace
         being set.
         By using this parser option, the behaviour of those methods can be
         influenced.
        </p>
       </div>
      </td>
     </tr>

    </tbody>
   
  </table>

  <table class="doctable table">
   <caption><strong><span class="classname"><a href="class.domexception.php" class="classname">DOMException</a></span> / <span class="classname"><strong class="classname">Dom\Exception</strong></span> constants</strong></caption>
   
    <thead>
     <tr>
      <th>Constants</th>
      <th>Value</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr id="constant.dom-php-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-php-err">DOM_PHP_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>0</td>
      <td>
       Error code not part of the DOM specification. Meant for PHP errors.
       Deprecated as of PHP 8.4.0 because this is no longer used.
       Prior to PHP 8.4.0, this was inconsistently used to indicate
       out-of-memory situations.
      </td>
     </tr>

     <tr id="constant.dom-index-size-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-index-size-err">DOM_INDEX_SIZE_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-index-size-err">Dom\INDEX_SIZE_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>1</td>
      <td>
       If index or size is negative, or greater than the allowed value.
      </td>
     </tr>

     <tr id="constant.domstring-size-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.domstring-size-err">DOMSTRING_SIZE_ERR</a></code></strong> / <strong><code>Dom\STRING_SIZE_ERR</code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>2</td>
      <td>
       If the specified range of text does not fit into a
       <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
      </td>
     </tr>

     <tr id="constant.dom-hierarchy-request-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-hierarchy-request-err">DOM_HIERARCHY_REQUEST_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-hierarchy-request-err">Dom\HIERARCHY_REQUEST_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>3</td>
      <td>If any node is inserted somewhere it doesn&#039;t belong</td>
     </tr>

     <tr id="constant.dom-wrong-document-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-wrong-document-err">DOM_WRONG_DOCUMENT_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-wrong-document-err">Dom\WRONG_DOCUMENT_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>4</td>
      <td>
       If a node is used in a different document than the one that created it.
      </td>
     </tr>

     <tr id="constant.dom-invalid-character-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-invalid-character-err">DOM_INVALID_CHARACTER_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-invalid-character-err">Dom\INVALID_CHARACTER_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>5</td>
      <td>
       If an invalid or illegal character is specified, such as in a name.
      </td>
     </tr>

     <tr id="constant.dom-no-data-allowed-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-no-data-allowed-err">DOM_NO_DATA_ALLOWED_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-no-data-allowed-err">Dom\NO_DATA_ALLOWED_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>6</td>
      <td>
       If data is specified for a node which does not support data.
      </td>
     </tr>

     <tr id="constant.dom-no-modification-allowed-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-no-modification-allowed-err">DOM_NO_MODIFICATION_ALLOWED_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-no-modification-allowed-err">Dom\NO_MODIFICATION_ALLOWED_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>7</td>
      <td>
       If an attempt is made to modify an object where modifications are not allowed.
      </td>
     </tr>

     <tr id="constant.dom-not-found-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-not-found-err">DOM_NOT_FOUND_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-not-found-err">Dom\NOT_FOUND_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>8</td>
      <td>
       If an attempt is made to reference a node in a context where it does not exist.
      </td>
     </tr>

     <tr id="constant.dom-not-supported-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-not-supported-err">DOM_NOT_SUPPORTED_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-not-supported-err">Dom\NOT_SUPPORTED_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>9</td>
      <td>
       If the implementation does not support the requested type of object or operation.
      </td>
     </tr>

     <tr id="constant.dom-inuse-attribute-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-inuse-attribute-err">DOM_INUSE_ATTRIBUTE_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-inuse-attribute-err">Dom\INUSE_ATTRIBUTE_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>10</td>
      <td>
       If an attempt is made to add an attribute that is already in use elsewhere.
      </td>
     </tr>

     <tr id="constant.dom-invalid-state-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-invalid-state-err">DOM_INVALID_STATE_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-invalid-state-err">Dom\INVALID_STATE_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>11</td>
      <td>
       If an attempt is made to use an object that is not, or is no longer, usable.
      </td>
     </tr>

     <tr id="constant.dom-syntax-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-syntax-err">DOM_SYNTAX_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-syntax-err">Dom\SYNTAX_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>12</td>
      <td>If an invalid or illegal string is specified.</td>
     </tr>

     <tr id="constant.dom-invalid-modification-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-invalid-modification-err">DOM_INVALID_MODIFICATION_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-invalid-modification-err">Dom\INVALID_MODIFICATION_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>13</td>
      <td>If an attempt is made to modify the type of the underlying object.</td>
     </tr>

     <tr id="constant.dom-namespace-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-namespace-err">DOM_NAMESPACE_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-namespace-err">Dom\NAMESPACE_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>14</td>
      <td>
       If an attempt is made to create or change an object in a way which is
       incorrect with regard to namespaces.
      </td>
     </tr>

     <tr id="constant.dom-invalid-access-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-invalid-access-err">DOM_INVALID_ACCESS_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-invalid-access-err">Dom\INVALID_ACCESS_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>15</td>
      <td>
       If a parameter or an operation is not supported by the underlying object.
      </td>
     </tr>

     <tr id="constant.dom-validation-err">
      <td>
       <strong><code><a href="dom.constants.php#constant.dom-validation-err">DOM_VALIDATION_ERR</a></code></strong> / <strong><code><a href="dom.constants.php#constant.dom-validation-err">Dom\VALIDATION_ERR</a></code></strong>
       (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
      </td>
      <td>16</td>
      <td>
       If a call to a method such as insertBefore or removeChild would make the Node
       invalid with respect to &quot;partial validity&quot;, this exception would be raised and
       the operation would not be done.
      </td>
     </tr>

    </tbody>
   
  </table>

 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/dom/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fdom.constants%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=dom.constants&amp;repo=en&amp;redirect=https://www.php.net/manual/en/dom.constants.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="book.dom.php">DOM</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="intro.dom.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="dom.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                                                <li class="current">
                            <a href="dom.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                                                <li class="">
                            <a href="dom.examples.php" title="Examples">Examples</a>
                        </li>
                                                <li class="">
                            <a href="class.domattr.php" title="DOMAttr">DOMAttr</a>
                        </li>
                                                <li class="">
                            <a href="class.domcdatasection.php" title="DOMCdataSection">DOMCdataSection</a>
                        </li>
                                                <li class="">
                            <a href="class.domcharacterdata.php" title="DOMCharacterData">DOMCharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.domchildnode.php" title="DOMChildNode">DOMChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domcomment.php" title="DOMComment">DOMComment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocument.php" title="DOMDocument">DOMDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumentfragment.php" title="DOMDocumentFragment">DOMDocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.domdocumenttype.php" title="DOMDocumentType">DOMDocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.domelement.php" title="DOMElement">DOMElement</a>
                        </li>
                                                <li class="">
                            <a href="class.domentity.php" title="DOMEntity">DOMEntity</a>
                        </li>
                                                <li class="">
                            <a href="class.domentityreference.php" title="DOMEntityReference">DOMEntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.domexception.php" title="DOMException">DOMException</a>
                        </li>
                                                <li class="">
                            <a href="class.domimplementation.php" title="DOMImplementation">DOMImplementation</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamednodemap.php" title="DOMNamedNodeMap">DOMNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.domnamespacenode.php" title="DOMNameSpaceNode">DOMNameSpaceNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domnode.php" title="DOMNode">DOMNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domnodelist.php" title="DOMNodeList">DOMNodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.domnotation.php" title="DOMNotation">DOMNotation</a>
                        </li>
                                                <li class="">
                            <a href="class.domparentnode.php" title="DOMParentNode">DOMParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.domprocessinginstruction.php" title="DOMProcessingInstruction">DOMProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.domtext.php" title="DOMText">DOMText</a>
                        </li>
                                                <li class="">
                            <a href="class.domxpath.php" title="DOMXPath">DOMXPath</a>
                        </li>
                                                <li class="">
                            <a href="enum.dom-adjacentposition.php" title="Dom\AdjacentPosition">Dom\AdjacentPosition</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-attr.php" title="Dom\Attr">Dom\Attr</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-cdatasection.php" title="Dom\CDATASection">Dom\CDATASection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-characterdata.php" title="Dom\CharacterData">Dom\CharacterData</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-childnode.php" title="Dom\ChildNode">Dom\ChildNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-comment.php" title="Dom\Comment">Dom\Comment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-document.php" title="Dom\Document">Dom\Document</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documentfragment.php" title="Dom\DocumentFragment">Dom\DocumentFragment</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-documenttype.php" title="Dom\DocumentType">Dom\DocumentType</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-dtdnamednodemap.php" title="Dom\DtdNamedNodeMap">Dom\DtdNamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-element.php" title="Dom\Element">Dom\Element</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entity.php" title="Dom\Entity">Dom\Entity</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-entityreference.php" title="Dom\EntityReference">Dom\EntityReference</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlcollection.php" title="Dom\HTMLCollection">Dom\HTMLCollection</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmldocument.php" title="Dom\HTMLDocument">Dom\HTMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-htmlelement.php" title="Dom\HTMLElement">Dom\HTMLElement</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-implementation.php" title="Dom\Implementation">Dom\Implementation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namednodemap.php" title="Dom\NamedNodeMap">Dom\NamedNodeMap</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-namespaceinfo.php" title="Dom\NamespaceInfo">Dom\NamespaceInfo</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-node.php" title="Dom\Node">Dom\Node</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-nodelist.php" title="Dom\NodeList">Dom\NodeList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-notation.php" title="Dom\Notation">Dom\Notation</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-parentnode.php" title="Dom\ParentNode">Dom\ParentNode</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-processinginstruction.php" title="Dom\ProcessingInstruction">Dom\ProcessingInstruction</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-text.php" title="Dom\Text">Dom\Text</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-tokenlist.php" title="Dom\TokenList">Dom\TokenList</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xmldocument.php" title="Dom\XMLDocument">Dom\XMLDocument</a>
                        </li>
                                                <li class="">
                            <a href="class.dom-xpath.php" title="Dom\XPath">Dom\XPath</a>
                        </li>
                                                <li class="">
                            <a href="ref.dom.php" title="DOM Functions">DOM Functions</a>
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
