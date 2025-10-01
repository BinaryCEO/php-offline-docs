<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: SimpleXMLElement::children - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/simplexmlelement.children.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/simplexmlelement.children.php">
 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.children.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/class.simplexmlelement.php">
 <link rel="prev" href="https://www.php.net/manual/en/simplexmlelement.attributes.php">
 <link rel="next" href="https://www.php.net/manual/en/simplexmlelement.construct.php">

 <link rel="alternate" href="https://www.php.net/manual/en/simplexmlelement.children.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/simplexmlelement.children.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/simplexmlelement.children.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/simplexmlelement.children.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/simplexmlelement.children.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/simplexmlelement.children.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/simplexmlelement.children.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/simplexmlelement.children.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/simplexmlelement.children.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/simplexmlelement.children.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/simplexmlelement.children.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Finds children of given node" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: SimpleXMLElement::children - Manual" />
<meta name="twitter:description" content="Finds children of given node" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: SimpleXMLElement::children - Manual" />
<meta itemprop="description" content="Finds children of given node" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Finds children of given node" />

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
        <a href="simplexmlelement.construct.php">
          SimpleXMLElement::__construct &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="simplexmlelement.attributes.php">
          &laquo; SimpleXMLElement::attributes        </a>
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
            <option value='en/simplexmlelement.children.php' selected="selected">English</option>
            <option value='de/simplexmlelement.children.php'>German</option>
            <option value='es/simplexmlelement.children.php'>Spanish</option>
            <option value='fr/simplexmlelement.children.php'>French</option>
            <option value='it/simplexmlelement.children.php'>Italian</option>
            <option value='ja/simplexmlelement.children.php'>Japanese</option>
            <option value='pt_BR/simplexmlelement.children.php'>Brazilian Portuguese</option>
            <option value='ru/simplexmlelement.children.php'>Russian</option>
            <option value='tr/simplexmlelement.children.php'>Turkish</option>
            <option value='uk/simplexmlelement.children.php'>Ukrainian</option>
            <option value='zh/simplexmlelement.children.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="simplexmlelement.children" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">SimpleXMLElement::children</h1>
  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">SimpleXMLElement::children</span> &mdash; <span class="dc-title">Finds children of given node</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-simplexmlelement.children-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="methodname"><strong>SimpleXMLElement::children</strong></span>(<span class="methodparam"><span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="language.types.string.php" class="type string">string</a></span></span> <code class="parameter">$namespaceOrPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong></span></span>, <span class="methodparam"><span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span> <code class="parameter">$isPrefix</code><span class="initializer"> = <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong></span></span>): <span class="type"><span class="type"><a href="language.types.null.php" class="type null">?</a></span><span class="type"><a href="class.simplexmlelement.php" class="type SimpleXMLElement">SimpleXMLElement</a></span></span></div>

  <p class="para rdfs-comment">
   This method finds the children of an element. The result follows normal
   iteration rules.
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: <span class="simpara">SimpleXML has made a rule of adding
iterative properties to most methods. They cannot be viewed using <span class="function"><a href="function.var-dump.php" class="function">var_dump()</a></span>
or anything else which can examine objects.</span></p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-simplexmlelement.children-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">namespaceOrPrefix</code></dt>
     <dd>
      <p class="para">
       An <abbr title="eXtensible Markup Language">XML</abbr> namespace.
      </p>
     </dd>
    
    
     <dt><code class="parameter">isPrefix</code></dt>
     <dd>
      <p class="para">
       If <code class="parameter">isPrefix</code> is <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>,
       <code class="parameter">namespaceOrPrefix</code> will be regarded as a prefix. If <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong>,
       <code class="parameter">namespaceOrPrefix</code> will be regarded as a namespace
       <abbr title="Uniform Resource Locator">URL</abbr>.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-simplexmlelement.children-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a <span class="classname"><a href="class.simplexmlelement.php" class="classname">SimpleXMLElement</a></span> element, whether the node 
   has children or not, unless the node represents an attribute, in which case
   <strong><code><a href="reserved.constants.php#constant.null">null</a></code></strong> is returned.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-simplexmlelement.children-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5878">
    <p><strong>Example #1 Traversing a <code class="literal">children()</code> pseudo-array</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$xml </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(<br /></span><span style="color: #DD0000">'&lt;person&gt;<br /> &lt;child role="son"&gt;<br />  &lt;child role="daughter"/&gt;<br /> &lt;/child&gt;<br /> &lt;child role="daughter"&gt;<br />  &lt;child role="son"&gt;<br />   &lt;child role="son"/&gt;<br />  &lt;/child&gt;<br /> &lt;/child&gt;<br />&lt;/person&gt;'</span><span style="color: #007700">);<br /><br />foreach (</span><span style="color: #0000BB">$xml</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">() as </span><span style="color: #0000BB">$second_gen</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">' The person begot a ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$second_gen</span><span style="color: #007700">[</span><span style="color: #DD0000">'role'</span><span style="color: #007700">];<br /><br />    foreach (</span><span style="color: #0000BB">$second_gen</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">() as </span><span style="color: #0000BB">$third_gen</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">' who begot a ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$third_gen</span><span style="color: #007700">[</span><span style="color: #DD0000">'role'</span><span style="color: #007700">] . </span><span style="color: #DD0000">';'</span><span style="color: #007700">;<br /><br />        foreach (</span><span style="color: #0000BB">$third_gen</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">() as </span><span style="color: #0000BB">$fourth_gen</span><span style="color: #007700">) {<br />            echo </span><span style="color: #DD0000">' and that ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$third_gen</span><span style="color: #007700">[</span><span style="color: #DD0000">'role'</span><span style="color: #007700">] .<br />                </span><span style="color: #DD0000">' begot a ' </span><span style="color: #007700">. </span><span style="color: #0000BB">$fourth_gen</span><span style="color: #007700">[</span><span style="color: #DD0000">'role'</span><span style="color: #007700">];<br />        }<br />    }<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">The person begot a son who begot a daughter; The person
begot a daughter who begot a son; and that son begot a son</pre>
</div>
    </div>
   </div>
   <div class="example" id="example-5879">
    <p><strong>Example #2 Using namespaces</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$xml </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;example xmlns:foo="my.foo.urn"&gt;<br />  &lt;foo:a&gt;Apple&lt;/foo:a&gt;<br />  &lt;foo:b&gt;Banana&lt;/foo:b&gt;<br />  &lt;c&gt;Cherry&lt;/c&gt;<br />&lt;/example&gt;'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$sxe </span><span style="color: #007700">= new </span><span style="color: #0000BB">SimpleXMLElement</span><span style="color: #007700">(</span><span style="color: #0000BB">$xml</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$kids </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$kids</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$kids </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$kids</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$kids </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">(</span><span style="color: #DD0000">'my.foo.urn'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$kids</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$kids </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">(</span><span style="color: #DD0000">'my.foo.urn'</span><span style="color: #007700">, </span><span style="color: #0000BB">TRUE</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$kids</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$kids </span><span style="color: #007700">= </span><span style="color: #0000BB">$sxe</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">children</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$kids</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">int(0)
int(2)
int(2)
int(0)
int(1)</pre>
</div>
    </div>
   </div>
  </p>
 </div>

 
 <div class="refsect1 seealso" id="refsect1-simplexmlelement.children-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="methodname"><a href="simplexmlelement.count.php" class="methodname" rel="rdfs-seeAlso">SimpleXMLElement::count()</a> - Counts the children of an element</span></li>
    <li><span class="function"><a href="function.count.php" class="function" rel="rdfs-seeAlso">count()</a> - Counts all elements in an array or in a Countable object</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/simplexml/simplexmlelement/children.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fsimplexmlelement.children%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=simplexmlelement.children&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.children.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="75311">  <div class="votes">
    <div id="Vu75311">
    <a href="/manual/vote-note.php?id=75311&amp;page=simplexmlelement.children&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75311">
    <a href="/manual/vote-note.php?id=75311&amp;page=simplexmlelement.children&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75311" title="68% like this...">
    13
    </div>
  </div>
  <a href="#75311" class="name">
  <strong class="user"><em>aero</em></strong></a><a class="genanchor" href="#75311"> &para;</a><div class="date" title="2007-05-23 08:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75311">
<div class="phpcode"><code><span class="html">Here's a simple, recursive, function to transform XML data into pseudo E4X syntax ie. root.child.value = foobar
<br />
<br /><span class="default">&lt;?php
<br />error_reporting</span><span class="keyword">(</span><span class="default">E_ALL</span><span class="keyword">);
<br />
<br /></span><span class="default">$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(
<br /></span><span class="string">'&lt;Patriarch&gt;
<br />   &lt;name&gt;Bill&lt;/name&gt;
<br />   &lt;wife&gt;
<br />     &lt;name&gt;Vi&lt;/name&gt;
<br />   &lt;/wife&gt;
<br />   &lt;son&gt;
<br />     &lt;name&gt;Bill&lt;/name&gt;
<br />   &lt;/son&gt;
<br />   &lt;daughter&gt;
<br />     &lt;name&gt;Jeri&lt;/name&gt;
<br />     &lt;husband&gt;
<br />       &lt;name&gt;Mark&lt;/name&gt;
<br />     &lt;/husband&gt;
<br />     &lt;son&gt;
<br />       &lt;name&gt;Greg&lt;/name&gt;
<br />     &lt;/son&gt;
<br />     &lt;son&gt;
<br />       &lt;name&gt;Tim&lt;/name&gt;
<br />     &lt;/son&gt;     
<br />     &lt;son&gt;
<br />       &lt;name&gt;Mark&lt;/name&gt;
<br />     &lt;/son&gt;     
<br />     &lt;son&gt;
<br />       &lt;name&gt;Josh&lt;/name&gt;
<br />         &lt;wife&gt;
<br />           &lt;name&gt;Kristine&lt;/name&gt;
<br />         &lt;/wife&gt; 
<br />         &lt;son&gt;
<br />           &lt;name&gt;Blake&lt;/name&gt;
<br />         &lt;/son&gt;
<br />         &lt;daughter&gt;
<br />           &lt;name&gt;Liah&lt;/name&gt;
<br />         &lt;/daughter&gt;
<br />     &lt;/son&gt;
<br />   &lt;/daughter&gt;
<br />&lt;/Patriarch&gt;'</span><span class="keyword">);
<br />
<br /></span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);
<br />
<br />function </span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">,</span><span class="default">$parent</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">)
<br />{
<br />   </span><span class="default">$child_count </span><span class="keyword">= </span><span class="default">0</span><span class="keyword">;
<br />   foreach(</span><span class="default">$xml </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)
<br />   {
<br />      </span><span class="default">$child_count</span><span class="keyword">++;     
<br />      if(</span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$parent</span><span class="keyword">.</span><span class="string">"."</span><span class="keyword">.</span><span class="default">$key</span><span class="keyword">) == </span><span class="default">0</span><span class="keyword">)  </span><span class="comment">// no childern, aka "leaf node"
<br />      </span><span class="keyword">{
<br />         print(</span><span class="default">$parent </span><span class="keyword">. </span><span class="string">"." </span><span class="keyword">. (string)</span><span class="default">$key </span><span class="keyword">. </span><span class="string">" = " </span><span class="keyword">. (string)</span><span class="default">$value </span><span class="keyword">. </span><span class="string">"&lt;BR&gt;\n"</span><span class="keyword">);        
<br />      }     
<br />   }
<br />   return </span><span class="default">$child_count</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>
<br />The output....
<br />
<br />.name = Bill
<br />.wife.name = Vi
<br />.son.name = Bill
<br />.daughter.name = Jeri
<br />.daughter.husband.name = Mark
<br />.daughter.son.name = Greg
<br />.daughter.son.name = Tim
<br />.daughter.son.name = Mark
<br />.daughter.son.name = Josh
<br />.daughter.son.wife.name = Kristine
<br />.daughter.son.son.name = Blake
<br />.daughter.son.daughter.name = Liah</span></code></div>
  </div>
 </div>
  <div class="note" id="58199">  <div class="votes">
    <div id="Vu58199">
    <a href="/manual/vote-note.php?id=58199&amp;page=simplexmlelement.children&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58199">
    <a href="/manual/vote-note.php?id=58199&amp;page=simplexmlelement.children&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58199" title="68% like this...">
    7
    </div>
  </div>
  <a href="#58199" class="name">
  <strong class="user"><em>Sebastian</em></strong></a><a class="genanchor" href="#58199"> &para;</a><div class="date" title="2005-10-27 03:45"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58199">
<div class="phpcode"><code><span class="html">Just a quick addition:
<br />
<br />If you need to access a child node which contains a dash, you need to encapsulate it with {""}.
<br />
<br />For example:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$domain</span><span class="keyword">-&gt;</span><span class="default">domain</span><span class="keyword">-</span><span class="default">listing </span><span class="keyword">as </span><span class="default">$product</span><span class="keyword">) {
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />The example above doesn't work because of the dash. But instead you need to use:
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">foreach (</span><span class="default">$domain</span><span class="keyword">-&gt;{</span><span class="string">"domain-listing"</span><span class="keyword">} as </span><span class="default">$product</span><span class="keyword">) {
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />At least for me the second example works perfectly fine.</span></code></div>
  </div>
 </div>
  <div class="note" id="81931">  <div class="votes">
    <div id="Vu81931">
    <a href="/manual/vote-note.php?id=81931&amp;page=simplexmlelement.children&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81931">
    <a href="/manual/vote-note.php?id=81931&amp;page=simplexmlelement.children&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81931" title="60% like this...">
    2
    </div>
  </div>
  <a href="#81931" class="name">
  <strong class="user"><em>transglobe at gmx dot de</em></strong></a><a class="genanchor" href="#81931"> &para;</a><div class="date" title="2008-03-19 02:37"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81931">
<div class="phpcode"><code><span class="html">I made a slightly differnt approch towards the RecurseXML function. Beeing hungry I had problems with the code, as it did just overwrite two &lt;maincourse&gt;s. So here is what I did:
<br />
<br /><span class="default">&lt;?php
<br />
<br />$xml </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(
<br /></span><span class="string">'&lt;meal&gt;
<br />   &lt;type&gt;Lunch&lt;/type&gt;
<br />   &lt;time&gt;12:30&lt;/time&gt;
<br />   &lt;menu&gt;
<br />     &lt;entree&gt;salad&lt;/entree&gt;
<br />     &lt;maincourse&gt;
<br />        &lt;part&gt;ships&lt;/part&gt;
<br />        &lt;part&gt;steak&lt;/part&gt;
<br />     &lt;/maincourse&gt;
<br />     &lt;maincourse&gt;
<br />        &lt;part&gt;fisch&lt;/part&gt;
<br />        &lt;part&gt;rice&lt;/part&gt;
<br />     &lt;/maincourse&gt;
<br />     &lt;maincourse&gt;
<br />        &lt;part&gt;wine&lt;/part&gt;
<br />        &lt;part&gt;cheese&lt;/part&gt;
<br />     &lt;/maincourse&gt;
<br />   &lt;/menu&gt;
<br />&lt;/meal&gt;'</span><span class="keyword">);
<br />
<br /></span><span class="default">$vals </span><span class="keyword">= array();
<br /></span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">,</span><span class="default">$vals</span><span class="keyword">);
<br />
<br />foreach(</span><span class="default">$vals </span><span class="keyword">as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">)
<br />  print(</span><span class="string">"</span><span class="keyword">{</span><span class="default">$key</span><span class="keyword">}</span><span class="string"> = </span><span class="keyword">{</span><span class="default">$value</span><span class="keyword">}</span><span class="string">&lt;BR&gt;\n"</span><span class="keyword">);
<br />
<br />function </span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">,&amp;</span><span class="default">$vals</span><span class="keyword">,</span><span class="default">$parent</span><span class="keyword">=</span><span class="string">""</span><span class="keyword">) {
<br />
<br />  </span><span class="default">$childs</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />  </span><span class="default">$child_count</span><span class="keyword">=-</span><span class="default">1</span><span class="keyword">; </span><span class="comment"># Not realy needed.
<br />  </span><span class="default">$arr</span><span class="keyword">=array();
<br />        foreach (</span><span class="default">$xml</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">() as </span><span class="default">$key</span><span class="keyword">=&gt;</span><span class="default">$value</span><span class="keyword">) {
<br />                if (</span><span class="default">in_array</span><span class="keyword">(</span><span class="default">$key</span><span class="keyword">,</span><span class="default">$arr</span><span class="keyword">)) {
<br />                        </span><span class="default">$child_count</span><span class="keyword">++;
<br />                } else {
<br />                        </span><span class="default">$child_count</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">;
<br />                }
<br />                </span><span class="default">$arr</span><span class="keyword">[]=</span><span class="default">$key</span><span class="keyword">;
<br />                </span><span class="default">$k</span><span class="keyword">=(</span><span class="default">$parent </span><span class="keyword">== </span><span class="string">""</span><span class="keyword">) ? </span><span class="string">"</span><span class="default">$key</span><span class="string">.</span><span class="default">$child_count</span><span class="string">" </span><span class="keyword">: </span><span class="string">"</span><span class="default">$parent</span><span class="string">.</span><span class="default">$key</span><span class="string">.</span><span class="default">$child_count</span><span class="string">"</span><span class="keyword">;
<br />                </span><span class="default">$childs</span><span class="keyword">=</span><span class="default">RecurseXML</span><span class="keyword">(</span><span class="default">$value</span><span class="keyword">,</span><span class="default">$vals</span><span class="keyword">,</span><span class="default">$k</span><span class="keyword">);
<br />                if (</span><span class="default">$childs</span><span class="keyword">==</span><span class="default">0</span><span class="keyword">) {
<br />                        </span><span class="default">$vals</span><span class="keyword">[</span><span class="default">$k</span><span class="keyword">]= (string)</span><span class="default">$value</span><span class="keyword">;
<br />                }
<br />        }
<br />
<br />  return </span><span class="default">$childs</span><span class="keyword">;
<br />}
<br />
<br /></span><span class="default">?&gt;
<br /></span>Output is like this:
<br />type.0 = Lunch
<br />time.0 = 12:30
<br />menu.0.entree.0 = salad
<br />menu.0.maincourse.0.part.0 = ships
<br />menu.0.maincourse.0.part.1 = steak
<br />menu.0.maincourse.0 =
<br />menu.0.maincourse.1.part.0 = fisch
<br />menu.0.maincourse.1.part.1 = rice
<br />menu.0.maincourse.1 =
<br />menu.0.maincourse.2.part.0 = wine
<br />menu.0.maincourse.2.part.1 = cheese
<br />menu.0.maincourse.2 =
<br />menu.0 = 
<br />
<br />(Not beautiful, but it solved my case...)</span></code></div>
  </div>
 </div>
  <div class="note" id="123694">  <div class="votes">
    <div id="Vu123694">
    <a href="/manual/vote-note.php?id=123694&amp;page=simplexmlelement.children&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123694">
    <a href="/manual/vote-note.php?id=123694&amp;page=simplexmlelement.children&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123694" title="no votes...">
    0
    </div>
  </div>
  <a href="#123694" class="name">
  <strong class="user"><em>boan dot web at outlook dot com</em></strong></a><a class="genanchor" href="#123694"> &para;</a><div class="date" title="2019-03-15 07:09"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123694">
<div class="phpcode"><code><span class="html">SimpleXMLElement::children can return null in this case:<br /><br /><span class="default">&lt;?php <br />$xml </span><span class="keyword">= </span><span class="string">'<br />&lt;root attr="Hello"/&gt;<br />'</span><span class="keyword">;<br /><br /></span><span class="default">$sxe </span><span class="keyword">= new </span><span class="default">SimpleXMLElement</span><span class="keyword">(</span><span class="default">$xml</span><span class="keyword">);<br /><br /></span><span class="default">$sxe_xpath </span><span class="keyword">= </span><span class="default">$sxe</span><span class="keyword">-&gt;</span><span class="default">xpath</span><span class="keyword">(</span><span class="string">'/root/@attr'</span><span class="keyword">)[</span><span class="default">0</span><span class="keyword">];<br /><br /></span><span class="default">$children </span><span class="keyword">= </span><span class="default">$sxe_xpath</span><span class="keyword">-&gt;</span><span class="default">children</span><span class="keyword">();<br /><br /></span><span class="default">var_export</span><span class="keyword">(</span><span class="default">$children</span><span class="keyword">); </span><span class="comment">// Is null<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=simplexmlelement.children&amp;repo=en&amp;redirect=https://www.php.net/manual/en/simplexmlelement.children.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
