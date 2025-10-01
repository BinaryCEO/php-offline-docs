<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: xml_set_object - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.xml-set-object.php">
 <link rel="shorturl" href="https://www.php.net/xml-set-object">
 <link rel="alternate" href="https://www.php.net/xml-set-object" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.xml.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.xml-set-notation-decl-handler.php">
 <link rel="next" href="https://www.php.net/manual/en/function.xml-set-processing-instruction-handler.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.xml-set-object.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.xml-set-object.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.xml-set-object.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.xml-set-object.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.xml-set-object.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.xml-set-object.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.xml-set-object.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.xml-set-object.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.xml-set-object.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.xml-set-object.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.xml-set-object.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Use XML Parser within an object" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: xml_set_object - Manual" />
<meta name="twitter:description" content="Use XML Parser within an object" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: xml_set_object - Manual" />
<meta itemprop="description" content="Use XML Parser within an object" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Use XML Parser within an object" />

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
        <a href="function.xml-set-processing-instruction-handler.php">
          xml_set_processing_instruction_handler &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.xml-set-notation-decl-handler.php">
          &laquo; xml_set_notation_decl_handler        </a>
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
            <option value='en/function.xml-set-object.php' selected="selected">English</option>
            <option value='de/function.xml-set-object.php'>German</option>
            <option value='es/function.xml-set-object.php'>Spanish</option>
            <option value='fr/function.xml-set-object.php'>French</option>
            <option value='it/function.xml-set-object.php'>Italian</option>
            <option value='ja/function.xml-set-object.php'>Japanese</option>
            <option value='pt_BR/function.xml-set-object.php'>Brazilian Portuguese</option>
            <option value='ru/function.xml-set-object.php'>Russian</option>
            <option value='tr/function.xml-set-object.php'>Turkish</option>
            <option value='uk/function.xml-set-object.php'>Ukrainian</option>
            <option value='zh/function.xml-set-object.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.xml-set-object" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">xml_set_object</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">xml_set_object</span> &mdash; <span class="dc-title">Use XML Parser within an object</span></p>

 </div>

 <div id="function.xml-set-object-refsynopsisdiv">
  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function has been
<em>DEPRECATED</em> as of PHP 8.4.0. Relying on this function
is highly discouraged.</p></div>
 </div>
 
 <div class="refsect1 description" id="refsect1-function.xml-set-object-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="attribute"><a href="class.deprecated.php">#[\Deprecated]</a> </span><br>
   <span class="methodname"><strong>xml_set_object</strong></span>(<span class="methodparam"><span class="type"><a href="class.xmlparser.php" class="type XMLParser">XMLParser</a></span> <code class="parameter">$parser</code></span>, <span class="methodparam"><span class="type"><a href="language.types.object.php" class="type object">object</a></span> <code class="parameter">$object</code></span>): <span class="type"><a href="language.types.singleton.php" class="type true">true</a></span></div>

  <p class="para rdfs-comment">
   This function allows to use <code class="parameter">parser</code> inside
   <code class="parameter">object</code>. All callback functions could be set with
   <span class="function"><a href="function.xml-set-element-handler.php" class="function">xml_set_element_handler()</a></span> etc and assumed to be
   methods of <code class="parameter">object</code>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.xml-set-object-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">parser</code></dt>
     <dd>
      <p class="para">
       A reference to the XML parser to use inside the object.
      </p>
     </dd>
    
    
     <dt><code class="parameter">object</code></dt>
     <dd>
      <p class="para">
       The object where to use the XML parser.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.xml-set-object-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Always returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.xml-set-object-changelog">
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
       This function is now deprecated,
       instead pass proper <span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> values to
       <span class="function"><strong>xml_set_()</strong></span>
      </td>
     </tr>

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


 <div class="refsect1 examples" id="refsect1-function.xml-set-object-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5914">
    <p><strong>Example #1 <span class="function"><strong>xml_set_object()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">CustomXMLParser<br /></span><span style="color: #007700">{<br />    private </span><span style="color: #0000BB">$parser</span><span style="color: #007700">;<br /><br />    function </span><span style="color: #0000BB">__construct</span><span style="color: #007700">() <br />    {<br />        </span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parser </span><span style="color: #007700">= </span><span style="color: #0000BB">xml_parser_create</span><span style="color: #007700">();<br /><br />        </span><span style="color: #0000BB">xml_set_object</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$this</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">xml_set_element_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parser</span><span style="color: #007700">, </span><span style="color: #DD0000">"tag_open"</span><span style="color: #007700">, </span><span style="color: #DD0000">"tag_close"</span><span style="color: #007700">);<br />        </span><span style="color: #0000BB">xml_set_character_data_handler</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parser</span><span style="color: #007700">, </span><span style="color: #DD0000">"cdata"</span><span style="color: #007700">);<br />    }<br /><br />    function </span><span style="color: #0000BB">parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$data</span><span style="color: #007700">) <br />    {<br />        </span><span style="color: #0000BB">xml_parse</span><span style="color: #007700">(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />    }<br /><br />    function </span><span style="color: #0000BB">tag_open</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$tag</span><span style="color: #007700">, </span><span style="color: #0000BB">$attributes</span><span style="color: #007700">) <br />    {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">, </span><span style="color: #0000BB">$attributes</span><span style="color: #007700">); <br />    }<br /><br />    function </span><span style="color: #0000BB">cdata</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$cdata</span><span style="color: #007700">) <br />    {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$cdata</span><span style="color: #007700">);<br />    }<br /><br />    function </span><span style="color: #0000BB">tag_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$parser</span><span style="color: #007700">, </span><span style="color: #0000BB">$tag</span><span style="color: #007700">) <br />    {<br />        </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$tag</span><span style="color: #007700">);<br />    }<br />}<br /><br /></span><span style="color: #0000BB">$xml_parser </span><span style="color: #007700">= new </span><span style="color: #0000BB">CustomXMLParser</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$xml_parser</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"&lt;A ID='hallo'&gt;PHP&lt;/A&gt;"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive examplescode"><pre class="examplescode">string(1) &quot;A&quot;
array(1) {
  [&quot;ID&quot;]=&gt;
  string(5) &quot;hallo&quot;
}
string(3) &quot;PHP&quot;
string(1) &quot;A&quot;</pre>
</div>
    </div>
   </div>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/xml/functions/xml-set-object.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.xml-set-object%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.xml-set-object&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-set-object.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">17 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="58999">  <div class="votes">
    <div id="Vu58999">
    <a href="/manual/vote-note.php?id=58999&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd58999">
    <a href="/manual/vote-note.php?id=58999&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V58999" title="100% like this...">
    1
    </div>
  </div>
  <a href="#58999" class="name">
  <strong class="user"><em>wake dot shinigami at gmail dot com</em></strong></a><a class="genanchor" href="#58999"> &para;</a><div class="date" title="2005-11-23 08:28"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom58999">
<div class="phpcode"><code><span class="html">I finally managed to get xml_set_object() to work, after much documentation searching.  As the solution I found has been hinted at, the focus has been wrong.<br /><br />There have been many problems getting class contained XML parsers to make changes to the members of an instance.  This is because, from what I'm guessing, the functions are using a either a new annonymous instance of the class or an uninstanced version of the class.<br /><br />What we want to make sure it does it that the parser is accessing its handlers as member methods of a particular instance of a class.  This can be done using the array method for passing a callback, setting the object as a reference to this instance.  This way, you know that the parser is going to call the function properly.<br /><br />Ex:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Parser </span><span class="keyword">{<br /><br /> private </span><span class="default">$parser</span><span class="keyword">;<br /> private </span><span class="default">$data</span><span class="keyword">;<br /><br /> public function </span><span class="default">__construct</span><span class="keyword">() {<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser </span><span class="keyword">= </span><span class="default">NULL</span><span class="keyword">;<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">data </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /> }<br /><br /> private function </span><span class="default">ParseElementStart</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">, </span><span class="default">$attrs</span><span class="keyword">) {<br />  </span><span class="comment">// Code<br /> </span><span class="keyword">}<br /> private function </span><span class="default">ParseElementEnd</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$name</span><span class="keyword">) {<br />  </span><span class="comment">// Code<br /> </span><span class="keyword">}<br /><br /> public function </span><span class="default">Parse</span><span class="keyword">(</span><span class="default">$XMLdata</span><span class="keyword">) {<br />  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser </span><span class="keyword">= </span><span class="default">xml_parser_create</span><span class="keyword">();<br />  </span><span class="default">xml_set_object</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">);<br />  </span><span class="default">xml_set_element_handler</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">,<br />                          array(&amp;</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'ParseElementStart'</span><span class="keyword">),<br />                          array(&amp;</span><span class="default">$this</span><span class="keyword">, </span><span class="string">'ParseElementEnd'</span><span class="keyword">));<br />  </span><span class="default">xml_parse</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">, </span><span class="default">$XMLdata</span><span class="keyword">);<br />  </span><span class="default">xml_parser_free</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">parser</span><span class="keyword">);<br /> }<br />}<br /></span><span class="default">?&gt;<br /></span><br />With this, when you call the Parse method, the data in that instance can be modified.  I'm not sure if xml_set_object becomes unneccissary when using the array callbacks, but I leave it in just to make sure that the xml_parse function knows it's in the object.<br /><br />As above, I'd recommend for memory sake, that the XML parser be created, used, and freed all in the same function, to ensure that everything is cleaned up correctly.</span></code></div>
  </div>
 </div>
  <div class="note" id="46601">  <div class="votes">
    <div id="Vu46601">
    <a href="/manual/vote-note.php?id=46601&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46601">
    <a href="/manual/vote-note.php?id=46601&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46601" title="100% like this...">
    1
    </div>
  </div>
  <a href="#46601" class="name">
  <strong class="user"><em>bettmenn at gmx dot de</em></strong></a><a class="genanchor" href="#46601"> &para;</a><div class="date" title="2004-10-16 02:03"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom46601">
<div class="phpcode"><code><span class="html">Adding to 'lmfe at mega dot ist dot utl dot pt' contribution below, I have to say that this behaviour is very usual for PHP if MemberVars of an Object arent initialized from the constructor.<br />What worked best for me so far was something like this:<br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">foo </span><span class="keyword">{<br />  var </span><span class="default">$bar<br />  </span><span class="comment">// the constructor<br />  </span><span class="keyword">function </span><span class="default">foo</span><span class="keyword">() {<br />    unset(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">bar</span><span class="keyword">);  </span><span class="comment">// with every instanciation, the variable is cleared for the object<br />  </span><span class="keyword">}<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="46107">  <div class="votes">
    <div id="Vu46107">
    <a href="/manual/vote-note.php?id=46107&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd46107">
    <a href="/manual/vote-note.php?id=46107&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V46107" title="100% like this...">
    1
    </div>
  </div>
  <a href="#46107" class="name">
  <strong class="user"><em>lmfe at mega dot ist dot utl dot pt</em></strong></a><a class="genanchor" href="#46107"> &para;</a><div class="date" title="2004-09-29 10:51"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom46107">
<div class="phpcode"><code><span class="html">Using PHP 4.3.0, I got this strange behaviour:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">xml  </span><span class="keyword">{<br /><br />     </span><span class="comment">/* (as specified in the documentation above) */<br /><br /></span><span class="keyword">} </span><span class="comment">// end of class xml<br /><br />/* This code works */<br /></span><span class="default">$xml_parser </span><span class="keyword">= new </span><span class="default">xml</span><span class="keyword">();<br /></span><span class="default">$xml_parser</span><span class="keyword">-&gt;</span><span class="default">parse</span><span class="keyword">(</span><span class="string">"&lt;A ID='hallo'&gt;PHP&lt;/A&gt;"</span><span class="keyword">);<br /><br /></span><span class="comment">/* This code works */<br /></span><span class="default">$xml_parser2 </span><span class="keyword">= new </span><span class="default">xml</span><span class="keyword">();<br /></span><span class="default">$xml_parser2</span><span class="keyword">-&gt;</span><span class="default">parse</span><span class="keyword">(</span><span class="string">"&lt;A ID='hallo2'&gt;PHP2&lt;/A&gt;"</span><span class="keyword">);<br /><br /></span><span class="comment">/* This code DON'T work */<br /></span><span class="default">$xml_parser </span><span class="keyword">= new </span><span class="default">xml</span><span class="keyword">();<br /></span><span class="default">$xml_parser</span><span class="keyword">-&gt;</span><span class="default">parse</span><span class="keyword">(</span><span class="string">"&lt;A ID='hallo3'&gt;PHP3&lt;/A&gt;"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br />In the third block of code, php complains it can't find the handlers it needs.<br />It seems this problem only happens if the variable is used more than once.<br />Calling xml_parser_free doesn't help</span></code></div>
  </div>
 </div>
  <div class="note" id="35465">  <div class="votes">
    <div id="Vu35465">
    <a href="/manual/vote-note.php?id=35465&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd35465">
    <a href="/manual/vote-note.php?id=35465&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V35465" title="100% like this...">
    1
    </div>
  </div>
  <a href="#35465" class="name">
  <strong class="user"><em>zitan at mediasculpt dot net</em></strong></a><a class="genanchor" href="#35465"> &para;</a><div class="date" title="2003-09-01 09:05"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom35465">
<div class="phpcode"><code><span class="html">Just a note about creating abstract "call back handlers" as mentioned in some of the other notes.  In this case I recommend extending the base XML class and overwritting the handler methods.  The reason I wanted to do this, is that if you have a separate callback method class it causes problems, for example if you want to collect information out of the XML file and store it in an array.  You can get around it with global variables, but I prefer to use them only when required ;)<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">xml_output </span><span class="keyword">extends </span><span class="default">xml</span><span class="keyword">{<br /><br />  var </span><span class="default">$output </span><span class="keyword">= array();<br /><br />   function </span><span class="default">xml_output</span><span class="keyword">(){<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">xml</span><span class="keyword">();<br />   }<br /><br />    </span><span class="comment">//overwrite base methods<br />    </span><span class="keyword">function </span><span class="default">tag_open</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">, </span><span class="default">$attributes</span><span class="keyword">)<br />    { <br />        </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="keyword">, </span><span class="string">"&lt;</span><span class="default">$tag</span><span class="string">, attributes&gt;"</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">cdata</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$cdata</span><span class="keyword">)<br />    {<br />         </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="keyword">, </span><span class="string">"</span><span class="default">$cdata</span><span class="string">"</span><span class="keyword">);<br />    }<br /><br />    function </span><span class="default">tag_close</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$tag</span><span class="keyword">)<br />    {<br />         </span><span class="default">array_push</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="keyword">, </span><span class="string">"&lt;/</span><span class="default">$tag</span><span class="string">&gt;"</span><span class="keyword">);<br />    }<br /><br />}<br /><br /></span><span class="default">$xml_parser </span><span class="keyword">= &amp; new </span><span class="default">xml_output</span><span class="keyword">();<br /></span><span class="default">$xml_parser</span><span class="keyword">-&gt;</span><span class="default">parse</span><span class="keyword">(</span><span class="string">"&lt;A ID='hallo'&gt;PHP&lt;/A&gt;"</span><span class="keyword">);<br />echo(</span><span class="string">"</span><span class="default">$xml_parser</span><span class="keyword">-&gt;</span><span class="default">output</span><span class="string">"</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="9678">  <div class="votes">
    <div id="Vu9678">
    <a href="/manual/vote-note.php?id=9678&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd9678">
    <a href="/manual/vote-note.php?id=9678&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V9678" title="100% like this...">
    1
    </div>
  </div>
  <a href="#9678" class="name">
  <strong class="user"><em>i_sofer at yahoo dot com</em></strong></a><a class="genanchor" href="#9678"> &para;</a><div class="date" title="2000-11-18 04:15"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom9678">
<div class="phpcode"><code><span class="html">Using xml parser in objects seem to have a problem that values modified(even of the object itself) get lost as soon as parsing ends...</span></code></div>
  </div>
 </div>
  <div class="note" id="119722">  <div class="votes">
    <div id="Vu119722">
    <a href="/manual/vote-note.php?id=119722&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119722">
    <a href="/manual/vote-note.php?id=119722&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119722" title="no votes...">
    0
    </div>
  </div>
  <a href="#119722" class="name">
  <strong class="user"><em>joey at gimo dot co dot uk</em></strong></a><a class="genanchor" href="#119722"> &para;</a><div class="date" title="2016-08-10 10:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119722">
<div class="phpcode"><code><span class="html">This function seems to be of very limited use when [$object_instance, "method_name"] is a callable.</span></code></div>
  </div>
 </div>
  <div class="note" id="44737">  <div class="votes">
    <div id="Vu44737">
    <a href="/manual/vote-note.php?id=44737&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd44737">
    <a href="/manual/vote-note.php?id=44737&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V44737" title="no votes...">
    0
    </div>
  </div>
  <a href="#44737" class="name">
  <strong class="user"><em>hwheinzen at t-online dot de</em></strong></a><a class="genanchor" href="#44737"> &para;</a><div class="date" title="2004-08-14 03:38"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom44737">
<div class="phpcode"><code><span class="html">(Adding to zitan's note)<br />It seems easy enough to provide output functions for callback handler classes too.<br /><br />Example:<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">CallBack </span><span class="keyword">{<br />    var </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Callback'</span><span class="keyword">;<br />    var </span><span class="default">$info </span><span class="keyword">= </span><span class="string">'Information!'</span><span class="keyword">;<br />    function </span><span class="default">toString</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">.</span><span class="string">': '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">info</span><span class="keyword">;<br />    }<br />}<br />class </span><span class="default">Main </span><span class="keyword">{<br />    var </span><span class="default">$name </span><span class="keyword">= </span><span class="string">'Main'</span><span class="keyword">;<br />    var </span><span class="default">$callBackObject</span><span class="keyword">;<br />    function </span><span class="default">setCallBack</span><span class="keyword">(&amp;</span><span class="default">$cBIn</span><span class="keyword">) { </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callBackObject </span><span class="keyword">= </span><span class="default">$cBIn</span><span class="keyword">; }<br />    function </span><span class="default">toString</span><span class="keyword">() {<br />        return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">name</span><span class="keyword">.</span><span class="string">': '</span><span class="keyword">.</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">callBackObject</span><span class="keyword">-&gt;</span><span class="default">toString</span><span class="keyword">();<br />    }<br />}<br /><br /></span><span class="default">$cb </span><span class="keyword">= &amp; new </span><span class="default">CallBack</span><span class="keyword">;<br /></span><span class="default">$m </span><span class="keyword">= &amp; new </span><span class="default">Main</span><span class="keyword">;<br /></span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">setCallBack</span><span class="keyword">(&amp;</span><span class="default">$cb</span><span class="keyword">);<br />echo </span><span class="default">$cb</span><span class="keyword">-&gt;</span><span class="default">toString</span><span class="keyword">();<br />echo </span><span class="default">$m</span><span class="keyword">-&gt;</span><span class="default">toString</span><span class="keyword">();<br /></span><span class="default">?&gt;<br /></span><br />So, after collecting information during the parse operation within the callback handler class, e.g. in tag_close(), retrieving them is possible.</span></code></div>
  </div>
 </div>
  <div class="note" id="26776">  <div class="votes">
    <div id="Vu26776">
    <a href="/manual/vote-note.php?id=26776&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd26776">
    <a href="/manual/vote-note.php?id=26776&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V26776" title="no votes...">
    0
    </div>
  </div>
  <a href="#26776" class="name">
  <strong class="user"><em>sbeam at syxyz dot net</em></strong></a><a class="genanchor" href="#26776"> &para;</a><div class="date" title="2002-11-12 09:34"><strong>22 years ago</strong></div>
  <div class="text" id="Hcom26776">
<div class="phpcode"><code><span class="html">passing the object as a call-time ref (&amp;$this) as in the example will create a warning in php 4.1+. Pass xml_set_object($xp,$this); instead. This does not seem to break anything - but I dont know for sure.</span></code></div>
  </div>
 </div>
  <div class="note" id="24037">  <div class="votes">
    <div id="Vu24037">
    <a href="/manual/vote-note.php?id=24037&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24037">
    <a href="/manual/vote-note.php?id=24037&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24037" title="no votes...">
    0
    </div>
  </div>
  <a href="#24037" class="name">
  <strong class="user"><em>chiefgeek at ecodedesign.com</em></strong></a><a class="genanchor" href="#24037"> &para;</a><div class="date" title="2002-08-04 10:37"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24037">
<div class="phpcode"><code><span class="html">Just adding a little note about my above written example.  It needs some improvements.<br /><br />Because PHP passes by VALUE by default, when you pass an array like this:<br />array($callback_handler, 'handler_method')<br />PHP makes a copy of the callback_handler object and uses the handler_method in the copy.<br /><br />This is not an ideal situation for many reasons...which I will not get into here...but you should have an idea by now.<br /><br />The best way to fix this is to change a few things. In the function declaration change the parameter from $callback_handler to &amp;$callback_handler. So now your declaration should look like this<br /><br />function set_callback_handler(&amp;$callback_handler)<br />{<br />  ...<br />}<br /><br />Now each time you reference $callback_handler change it to &amp;$callback_handler.  For example:<br /><br />xml_set_element_handler(<br />          $this-&gt;xml_parser,<br />          array(&amp;$callback_handler, 'start_element'),<br />          array(&amp;$callback_handler, 'close_Element' ));<br /><br />This ensures that PHP will always use the same object.</span></code></div>
  </div>
 </div>
  <div class="note" id="24011">  <div class="votes">
    <div id="Vu24011">
    <a href="/manual/vote-note.php?id=24011&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd24011">
    <a href="/manual/vote-note.php?id=24011&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V24011" title="no votes...">
    0
    </div>
  </div>
  <a href="#24011" class="name">
  <strong class="user"><em>chiefgeek at ecodedesign.com</em></strong></a><a class="genanchor" href="#24011"> &para;</a><div class="date" title="2002-08-03 08:25"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom24011">
<div class="phpcode"><code><span class="html">xml_set_object is great, if you want to hard code your start_element, end_element, etc functions within your xml class.<br /><br />But what if you want to increase the modularity of your application?<br /><br />Solution, create one generic XMLParser class that handles everything *except* the callback funtions.  Then create an abstract XMLCallbackHandler class which you can extend to provide any customization you want.<br /><br />So how do you tell the php's xml_parser that you want to use this other class to handle the callback functions.<br /><br />xml_set_object?  This only works if the functions are *within* the object you called this method from.<br /><br />The solution lies in the xml_set_element_handler() function.<br />Take a look at this sample source...<br /><br />class XMLParser<br />{<br /><br />  ...<br /><br />  function set_callback_handler($callback_handler)<br />  {<br />    // Assign the startElement endElement functions<br />    xml_set_element_handler(<br />          $this-&gt;xml_parser,<br />          array($callback_handler, 'start_element'),<br />          array($callback_handler, 'close_Element' ));<br /><br />    /* By passing an array with this ($object, 'function_name') structure<br />       to the 2nd and 3rd parameters.  We are able to tell the parser to<br />       look in another object for these callback functions.<br />    */<br /><br />    // Assign the character data function<br />    xml_set_character_data_handler(<br />          $this-&gt;xml_parser,<br />          array($callback_handler, 'character_data'));<br />    }<br />}<br /><br />class myCallBackHandler<br />{<br />  function start_element(...)<br />  {<br />    //code goes here<br />  }<br /><br />  function end_element(...)<br />  {<br />    //code goes here<br />  }<br /><br />  function character_data(...)<br />  {<br />    //code goes here<br />  }<br />}<br /><br />Now all thats left to do is use these classes..<br /><br />$parser = new XMLParser();<br />$parser-&gt;set_callback_handler(new myCallbackHandler());</span></code></div>
  </div>
 </div>
  <div class="note" id="20683">  <div class="votes">
    <div id="Vu20683">
    <a href="/manual/vote-note.php?id=20683&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd20683">
    <a href="/manual/vote-note.php?id=20683&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V20683" title="no votes...">
    0
    </div>
  </div>
  <a href="#20683" class="name">
  <strong class="user"><em>dfoesch at cs dot nmsu dot edu</em></strong></a><a class="genanchor" href="#20683"> &para;</a><div class="date" title="2002-04-12 05:38"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom20683">
<div class="phpcode"><code><span class="html">English explaination of why you do: $xml = &amp; new xml();<br /><br />Ok, when PHP executes "new xml()" it creates an anonymous variable (one that you can't reference with any name) which it then runs the constructor function on.  Ok, now once that's done, it then assigns by VALUE in the example above.  This means that that lovely pointer to your parser is pointing to the anonymous instance of your class, and not the used instance of your class... thus making a "shadow" of all your variables, where assignments inside the parser access different variables than outside the parser.  What PHP _SHOULD_ be doing (similar to C++) is have this statement execute such that the assignment is done by REFERENCE, so that you assign the new name to the class that actually got constructed, and not just a copy of the class that you constructed.<br /><br />If they did it right, this code wouldn't be broken.</span></code></div>
  </div>
 </div>
  <div class="note" id="19064">  <div class="votes">
    <div id="Vu19064">
    <a href="/manual/vote-note.php?id=19064&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd19064">
    <a href="/manual/vote-note.php?id=19064&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V19064" title="no votes...">
    0
    </div>
  </div>
  <a href="#19064" class="name"><strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#19064"> &para;</a><div class="date" title="2002-02-14 11:10"><strong>23 years ago</strong></div>
  <div class="text" id="Hcom19064">
<div class="phpcode"><code><span class="html">Call-time pass-by-reference has been deprecated, so the example is buggy as was already mentionned. However since 4.04 (I think) "new" can return objects by reference. So the clean way to have both the parser initialised in the constructor, and to save the result in your object is to do <br /><br />$xml_parser = &amp; new xml();<br /><br />see <a href="http://www.php.net/manual/en/language.oop.newref.php" rel="nofollow" target="_blank">http://www.php.net/manual/en/language.oop.newref.php</a><br /><br />Ivan</span></code></div>
  </div>
 </div>
  <div class="note" id="15075">  <div class="votes">
    <div id="Vu15075">
    <a href="/manual/vote-note.php?id=15075&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15075">
    <a href="/manual/vote-note.php?id=15075&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15075" title="no votes...">
    0
    </div>
  </div>
  <a href="#15075" class="name">
  <strong class="user"><em>pete dot nelson at serverSXPYAZMsolved dot com</em></strong></a><a class="genanchor" href="#15075"> &para;</a><div class="date" title="2001-08-27 10:15"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15075">
<div class="phpcode"><code><span class="html">&lt;p&gt;in reply to jon9mm's question, I have found the same problem (function 'startElement' does not exist).  I finally found the way around this, by re-reading this doc for xml_set_object.  You HAVE to use the xml_set_object($this-&gt;parser, &amp;$this) within your parser function.&lt;/p&gt; &lt;p&gt;When that function is called, your object temporarily becomes the parser object and shares scope (so it can see 'startElement', etc).   Once that function is done, the xml_set_object(...) call goes out of scope, and your object is no longer bound to the parser.  So the simplist solution is to call xml_set_object(...), do any parsing, and then call xml_parser_free(...) all within the same function.&lt;/p&gt;
<br />&lt;p&gt;And remember, don't call xml_set_object(...) in your object's constructor - your object will be forever bound to the parser object and you'll loose all access to your object's member functions.&lt;/p&gt;
<br />&lt;p&gt;This is all explained in the examples above, but it took me reading it a couple of times to grok how it all works.&lt;/p&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="12893">  <div class="votes">
    <div id="Vu12893">
    <a href="/manual/vote-note.php?id=12893&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd12893">
    <a href="/manual/vote-note.php?id=12893&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V12893" title="no votes...">
    0
    </div>
  </div>
  <a href="#12893" class="name">
  <strong class="user"><em>nick at category4 dot com</em></strong></a><a class="genanchor" href="#12893"> &para;</a><div class="date" title="2001-05-14 01:45"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom12893">
<div class="phpcode"><code><span class="html">If you're using the XML parser within an object, be careful not to accidentally call any methods that don't exist within the object. Instead of complaining that the missing method doesn't exist, PHP will say it's not able to find the handler routines, even if you've indicated them correctly. (PHP version 4.0.5 on FreeBSD).</span></code></div>
  </div>
 </div>
  <div class="note" id="10006">  <div class="votes">
    <div id="Vu10006">
    <a href="/manual/vote-note.php?id=10006&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd10006">
    <a href="/manual/vote-note.php?id=10006&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V10006" title="no votes...">
    0
    </div>
  </div>
  <a href="#10006" class="name">
  <strong class="user"><em>williams at cse dot unl dot edu</em></strong></a><a class="genanchor" href="#10006"> &para;</a><div class="date" title="2000-12-06 12:42"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom10006">
<div class="phpcode"><code><span class="html">If xml_set_object is not called in the constructor of an object, the values that the parser modifies will be saved. Else, the values do not seem to be saved as stated by "i_sofer" above.
<br />--- Start Example Code ---
<br />class foo {
<br />var xmlparser;
<br />function foo() { \\the constructor
<br />$this-&gt;xmlparser=xmlparser_create();
<br />}
<br />function parse() {
<br />xml_set_object($this-&gt;xmlparser,&amp;$this);
<br />\\also include data handler
<br />\\and element handlers here
<br />}
<br />}
<br />--- End Example Code ---</span></code></div>
  </div>
 </div>
  <div class="note" id="7916">  <div class="votes">
    <div id="Vu7916">
    <a href="/manual/vote-note.php?id=7916&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd7916">
    <a href="/manual/vote-note.php?id=7916&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V7916" title="no votes...">
    0
    </div>
  </div>
  <a href="#7916" class="name">
  <strong class="user"><em>malcontent at msgto dot com</em></strong></a><a class="genanchor" href="#7916"> &para;</a><div class="date" title="2000-08-20 12:11"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom7916">
<div class="phpcode"><code><span class="html">The example will generate a warning unless allow_call_time_pass_reference is set to true in your INI file. It also will not accept a call by value.</span></code></div>
  </div>
 </div>
  <div class="note" id="5162">  <div class="votes">
    <div id="Vu5162">
    <a href="/manual/vote-note.php?id=5162&amp;page=function.xml-set-object&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd5162">
    <a href="/manual/vote-note.php?id=5162&amp;page=function.xml-set-object&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V5162" title="no votes...">
    0
    </div>
  </div>
  <a href="#5162" class="name">
  <strong class="user"><em>robert at webmotion dot com</em></strong></a><a class="genanchor" href="#5162"> &para;</a><div class="date" title="2000-04-18 10:58"><strong>25 years ago</strong></div>
  <div class="text" id="Hcom5162">
<div class="phpcode"><code><span class="html">While true that there is no automatic destructor for PHP class objects, it is quite simple to create a method called destroy and perform the destruction manually. In the example above it may not be necessary to free the xml parser immediately... it would appear from the example that the object is re-useable.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.xml-set-object&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.xml-set-object.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
