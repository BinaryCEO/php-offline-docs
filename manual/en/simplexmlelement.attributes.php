<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLElement::attributes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/simplexmlelement.attributes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexmlelement.attributes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.attributes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.simplexmlelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.asxml.php">
 <link rel="next" href="https://www.php.net/manual/en/simplexmlelement.children.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.attributes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexmlelement.attributes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexmlelement.attributes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexmlelement.attributes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexmlelement.attributes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexmlelement.attributes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexmlelement.attributes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexmlelement.attributes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexmlelement.attributes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexmlelement.attributes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexmlelement.attributes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Identifies an element's attributes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLElement::attributes - Manual" />
<meta name="twitter:description" content="Identifies an element's attributes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLElement::attributes - Manual" />
<meta itemprop="description" content="Identifies an element's attributes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Identifies an element's attributes" />

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
        <a href="simplexmlelement.children.php">
          SimpleXMLElement::children &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.asxml.php">
          &laquo; SimpleXMLElement::asXML        </a>
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
            <option value='en/simplexmlelement.attributes.php' selected="selected">English</option>
            <option value='de/simplexmlelement.attributes.php'>German</option>
            <option value='es/simplexmlelement.attributes.php'>Spanish</option>
            <option value='fr/simplexmlelement.attributes.php'>French</option>
            <option value='it/simplexmlelement.attributes.php'>Italian</option>
            <option value='ja/simplexmlelement.attributes.php'>Japanese</option>
            <option value='pt_BR/simplexmlelement.attributes.php'>Brazilian Portuguese</option>
            <option value='ru/simplexmlelement.attributes.php'>Russian</option>
            <option value='tr/simplexmlelement.attributes.php'>Turkish</option>
            <option value='uk/simplexmlelement.attributes.php'>Ukrainian</option>
            <option value='zh/simplexmlelement.attributes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexmlelement.attributes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SimpleXMLElement::attributes</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SimpleXMLElement::attributes</span> &mdash; <span class="dc-title">Identifies an element&#039;s attributes</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-simplexmlelement.attributes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SimpleXMLElement::attributes</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>

  <p class="para rdfs-comment">
   This function provides the attributes and values defined within an xml tag.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">SimpleXML has made a rule of adding
iterative properties to most methods. They cannot be viewed using <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>
or anything else which can examine objects.</span></p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-simplexmlelement.attributes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">namespaceOrPrefix</code></dt>
     <dd>
      <p class="para">
       An optional namespace for the retrieved attributes
      </p>
     </dd>
    
    
     <dt><code class="parameter">isPrefix</code></dt>
     <dd>
      <p class="para">
       Default to <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-simplexmlelement.attributes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> object that can be
   iterated over to loop through the attributes on the tag.
  </p>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> if called on a <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span>
   object that already represents an attribute and not a tag.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-simplexmlelement.attributes-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5877">
    <p><strong>Example #1 Interpret an XML string</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$string </span><span style="color: #007700">= &lt;&lt;&lt;XML<br /></span><span style="color: #DD0000">&lt;a&gt;<br /> &lt;foo name="one" game="lonely"&gt;1&lt;/foo&gt;<br />&lt;/a&gt;<br /></span><span style="color: #007700">XML;<br /><br /></span><span style="color: #0000BB">$xml </span><span style="color: #007700">= </span><span style="color: #0000BB">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #0000BB">$string</span><span style="color: #007700">);<br />foreach(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">foo</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]-&gt;</span><span style="color: #0000BB">attributes</span><span style="color: #007700">() as </span><span style="color: #0000BB">$a </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$b</span><span style="color: #007700">) {<br />    echo </span><span style="color: #0000BB">$a</span><span style="color: #007700">,</span><span style="color: #DD0000">'="'</span><span style="color: #007700">,</span><span style="color: #0000BB">$b</span><span style="color: #007700">,</span><span style="color: #DD0000">"\"\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">name=&quot;one&quot;
game=&quot;lonely&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-simplexmlelement.attributes-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmlelement/attributes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexmlelement.attributes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexmlelement.attributes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.attributes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97266">  <div class="votes">
    <div id="Vu97266">
    <a href="/manual/vote-note.php?id=97266&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97266">
    <a href="/manual/vote-note.php?id=97266&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97266" title="71% like this...">
    47
    </div>
  </div>
  <a href="#97266" class="name">
  <strong class="user"><em>Xeoncross</em></strong></a><a class="genanchor" href="#97266"> &para;</a><div class="date" title="2010-04-10 07:46"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97266">
<div class="phpcode"><code><span class="html">It is really simple to access attributes using array form. However, you must convert them to strings or ints if you plan on passing the values to functions.<br /><br /><span class="default">&lt;?php<br />SimpleXMLElement Object<br /></span><span class="keyword">(<br />    [@</span><span class="default">attributes</span><span class="keyword">] =&gt; Array<br />        (<br />            [</span><span class="default">id</span><span class="keyword">] =&gt; </span><span class="default">55555<br />        </span><span class="keyword">)<br /><br />    [</span><span class="default">text</span><span class="keyword">] =&gt; </span><span class="string">"hello world"<br /></span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span><br />Then using a function<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">function </span><span class="default">xml_attribute</span><span class="keyword">(</span><span class="default">$object</span><span class="keyword">, </span><span class="default">$attribute</span><span class="keyword">)<br />{<br />    if(isset(</span><span class="default">$object</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">]))<br />        return (string) </span><span class="default">$object</span><span class="keyword">[</span><span class="default">$attribute</span><span class="keyword">];<br />}<br /></span><span class="default">?&gt;<br /></span><br />I can get the "id" like this<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">print </span><span class="default">xml_attribute</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">, </span><span class="string">'id'</span><span class="keyword">); </span><span class="comment">//prints "55555"<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="108029">  <div class="votes">
    <div id="Vu108029">
    <a href="/manual/vote-note.php?id=108029&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108029">
    <a href="/manual/vote-note.php?id=108029&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108029" title="73% like this...">
    28
    </div>
  </div>
  <a href="#108029" class="name">
  <strong class="user"><em>chris at chlab dot ch</em></strong></a><a class="genanchor" href="#108029"> &para;</a><div class="date" title="2012-03-23 10:16"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108029">
<div class="phpcode"><code><span class="html">Note that you must provide the namespace if you want to access an attribute of a non-default namespace:<br /><br />Consider the following example:<br /><br /><span class="default">&lt;?php<br />$xml </span><span class="keyword">= &lt;&lt;&lt;XML<br /></span><span class="string">&lt;?xml version="1.0"?&gt;<br />&lt;Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"<br /> xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"&gt;<br /> &lt;Table Foo="Bar" ss:ExpandedColumnCount="7"&gt;<br /> &lt;/Table&gt;<br />&lt;/Workbook&gt;<br /></span><span class="keyword">XML;<br /><br /></span><span class="default">$sxml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="comment">/**<br /> * Access attribute of default namespace<br /> */<br /></span><span class="default">var_dump</span><span class="keyword">((string) </span><span class="default">$sxml</span><span class="keyword">-&gt;</span><span class="default">Table</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'Foo'</span><span class="keyword">]);<br /></span><span class="comment">// outputs: 'Bar'<br /><br />/**<br /> * Access attribute of non-default namespace<br /> */<br /></span><span class="default">var_dump</span><span class="keyword">((int) </span><span class="default">$sxml</span><span class="keyword">-&gt;</span><span class="default">Table</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">][</span><span class="string">'ExpandedColumnCount'</span><span class="keyword">]);<br /></span><span class="comment">// outputs: 0<br /><br /></span><span class="default">var_dump</span><span class="keyword">((int) </span><span class="default">$sxml</span><span class="keyword">-&gt;</span><span class="default">Table</span><span class="keyword">[</span><span class="default">0</span><span class="keyword">]-&gt;</span><span class="default">attributes</span><span class="keyword">(</span><span class="string">'ss'</span><span class="keyword">, </span><span class="default">TRUE</span><span class="keyword">)-&gt;</span><span class="default">ExpandedColumnCount</span><span class="keyword">);<br /></span><span class="comment">// outputs: '7'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="103677">  <div class="votes">
    <div id="Vu103677">
    <a href="/manual/vote-note.php?id=103677&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd103677">
    <a href="/manual/vote-note.php?id=103677&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V103677" title="71% like this...">
    28
    </div>
  </div>
  <a href="#103677" class="name">
  <strong class="user"><em>sarlak</em></strong></a><a class="genanchor" href="#103677"> &para;</a><div class="date" title="2011-04-27 01:12"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom103677">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />$att </span><span class="keyword">= </span><span class="string">'attribueName'</span><span class="keyword">;<br /><br /></span><span class="comment">// You can access an element's attribute just like this :<br /></span><span class="default">$attribute </span><span class="keyword">= </span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">()-&gt;</span><span class="default">$att</span><span class="keyword">;<br /><br /></span><span class="comment">// This will save the value of the attribute, and not the objet<br /></span><span class="default">$attribute </span><span class="keyword">= (string)</span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">()-&gt;</span><span class="default">$att</span><span class="keyword">;<br /><br /></span><span class="comment">// You also can edit it this way :<br /></span><span class="default">$element</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">()-&gt;</span><span class="default">$att </span><span class="keyword">= </span><span class="string">'New value of the attribute'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="110574">  <div class="votes">
    <div id="Vu110574">
    <a href="/manual/vote-note.php?id=110574&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd110574">
    <a href="/manual/vote-note.php?id=110574&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V110574" title="68% like this...">
    14
    </div>
  </div>
  <a href="#110574" class="name">
  <strong class="user"><em>totalwipeout at gmail dot com</em></strong></a><a class="genanchor" href="#110574"> &para;</a><div class="date" title="2012-11-08 05:21"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom110574">
<div class="phpcode"><code><span class="html">Tip to get a real array of all attributes of a node (not SimpleXML's object acting like an array)<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">//- $node is a SimpleXMLElement object<br /><br /></span><span class="default">$atts_object </span><span class="keyword">= </span><span class="default">$node</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">(); </span><span class="comment">//- get all attributes, this is not a real array<br /></span><span class="default">$atts_array </span><span class="keyword">= (array) </span><span class="default">$atts_object</span><span class="keyword">; </span><span class="comment">//- typecast to an array<br /><br />//- grab the value of '@attributes' key, which contains the array your after<br /></span><span class="default">$atts_array </span><span class="keyword">= </span><span class="default">$atts_array</span><span class="keyword">[</span><span class="string">'@attributes'</span><span class="keyword">];<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$atts_object</span><span class="keyword">); </span><span class="comment">//- outputs object(SimpleXMLElement)[19]<br />                        //-             public '@attributes' =&gt; ...<br /><br /></span><span class="default">var_dump</span><span class="keyword">(</span><span class="default">$atts_array</span><span class="keyword">); </span><span class="comment">//- outputs array (size=11) ...<br /><br /></span><span class="default">?&gt;<br /></span>Hope this helps!</span></code></div>
  </div>
 </div>
  <div class="note" id="117822">  <div class="votes">
    <div id="Vu117822">
    <a href="/manual/vote-note.php?id=117822&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117822">
    <a href="/manual/vote-note.php?id=117822&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117822" title="62% like this...">
    2
    </div>
  </div>
  <a href="#117822" class="name">
  <strong class="user"><em>andy dot locologic+101 at gmail dot com</em></strong></a><a class="genanchor" href="#117822"> &para;</a><div class="date" title="2015-08-14 10:00"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117822">
<div class="phpcode"><code><span class="html">Easiest and safest way to get attributes as an array is to use the iterator_to_array function (see <a href="http://php.net/manual/en/function.iterator-to-array.php" rel="nofollow" target="_blank">http://php.net/manual/en/function.iterator-to-array.php</a>):<br /><br /><span class="default">&lt;?php<br />      $x </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="string">'&lt;div class="myclass" id="myid"/&gt;'</span><span class="keyword">);<br />      </span><span class="default">$attributes </span><span class="keyword">= </span><span class="default">iterator_to_array</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">());<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="113164">  <div class="votes">
    <div id="Vu113164">
    <a href="/manual/vote-note.php?id=113164&amp;page=simplexmlelement.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113164">
    <a href="/manual/vote-note.php?id=113164&amp;page=simplexmlelement.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113164" title="53% like this...">
    2
    </div>
  </div>
  <a href="#113164" class="name">
  <strong class="user"><em>webfelipemaia at gmail dot com</em></strong></a><a class="genanchor" href="#113164"> &para;</a><div class="date" title="2013-09-07 05:11"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom113164">
<div class="phpcode"><code><span class="html">Use attributes to display when it meets certain condition defined attribute / value in xml tags.<br /><br />Use atributos para exibir quando atende determinada condição definida atributo / valor em tags XML.<br /><br />Consider the following example:<br />Considere o seguinte exemplo:<br /><br />(file.xml)<br /><br />&lt;?xml version="1.0" encoding="UTF-8"?&gt;<br /><br />&lt;list&gt;<br />    &lt;item type="Language"&gt;<br />        &lt;name&gt;PHP&lt;/name&gt;<br />        &lt;link&gt;www.php.net&lt;/link&gt;<br />    &lt;/item&gt;<br />    &lt;item type="Database"&gt;<br />        &lt;name&gt;Java&lt;/name&gt;<br />        &lt;link&gt;www.oracle.com/br/technologies/java/‎&lt;/link&gt;<br />    &lt;/item&gt;<br />&lt;/list&gt;<br /><br />Checks if the attribute value equals "Language", if equal prints everything that is related to "Language".<br /><br />Verifica se o valor do atributo é igual a "Language", se for, imprime tudo o que for relativo ao mesmo.<br /><br /><span class="default">&lt;?php<br /><br />$xml </span><span class="keyword">= </span><span class="default">simplexml_load_file</span><span class="keyword">(</span><span class="string">"file.xml"</span><span class="keyword">);<br /><br />foreach(</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">() as </span><span class="default">$child</span><span class="keyword">) {<br />    <br />        </span><span class="default">$role </span><span class="keyword">= </span><span class="default">$child</span><span class="keyword">-&gt;</span><span class="default">attributes</span><span class="keyword">();<br /><br />        foreach(</span><span class="default">$child </span><span class="keyword">as </span><span class="default">$key </span><span class="keyword">=&gt; </span><span class="default">$value</span><span class="keyword">) {<br />            <br />            if(</span><span class="default">$role </span><span class="keyword">== </span><span class="string">"Language"</span><span class="keyword">)<br />            echo(</span><span class="string">"["</span><span class="keyword">.</span><span class="default">$key </span><span class="keyword">.</span><span class="string">"] "</span><span class="keyword">.</span><span class="default">$value </span><span class="keyword">. </span><span class="string">"&lt;br /&gt;"</span><span class="keyword">);<br />            <br />        }<br />}<br /></span><span class="default">?&gt;<br /></span><br />output:<br />saída:<br /><br />[name] PHP<br />[link] www.php.net</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexmlelement.attributes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.attributes.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
