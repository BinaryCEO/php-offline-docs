<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: strval - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.strval.php">
 <link rel="shorturl" href="https://www.php.net/strval">
 <link rel="alternate" href="https://www.php.net/strval" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.var.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.settype.php">
 <link rel="next" href="https://www.php.net/manual/en/function.unserialize.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.strval.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.strval.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.strval.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.strval.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.strval.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.strval.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.strval.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.strval.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.strval.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.strval.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.strval.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Get string value of a variable" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: strval - Manual" />
<meta name="twitter:description" content="Get string value of a variable" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: strval - Manual" />
<meta itemprop="description" content="Get string value of a variable" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Get string value of a variable" />

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
        <a href="function.unserialize.php">
          unserialize &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.settype.php">
          &laquo; settype        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.var.php'>Variable handling</a></li>      <li><a href='ref.var.php'>Variable handling Functions</a></li>      </ul>
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
            <option value='en/function.strval.php' selected="selected">English</option>
            <option value='de/function.strval.php'>German</option>
            <option value='es/function.strval.php'>Spanish</option>
            <option value='fr/function.strval.php'>French</option>
            <option value='it/function.strval.php'>Italian</option>
            <option value='ja/function.strval.php'>Japanese</option>
            <option value='pt_BR/function.strval.php'>Brazilian Portuguese</option>
            <option value='ru/function.strval.php'>Russian</option>
            <option value='tr/function.strval.php'>Turkish</option>
            <option value='uk/function.strval.php'>Ukrainian</option>
            <option value='zh/function.strval.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.strval" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">strval</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strval</span> &mdash; <span class="dc-title">Get string value of a variable</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.strval-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>strval</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.mixed.php" class="type mixed">mixed</a></span> <code class="parameter">$value</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="simpara">
   Get the string value of a variable.
   See the documentation on <span class="type"><a href="language.types.string.php" class="type string">string</a></span> for more information
   on converting to string.
  </p>
  <p class="simpara">
   This function performs no formatting on the returned value. If you
   are looking for a way to format a numeric value as a string, please
   see <span class="function"><a href="function.sprintf.php" class="function">sprintf()</a></span> or <span class="function"><a href="function.number-format.php" class="function">number_format()</a></span>.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.strval-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">value</code></dt>
     <dd>
      <p class="para">
       The variable that is being converted to a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>.
      </p>
      <p class="para">
       <code class="parameter">value</code> may be any scalar type, <span class="type"><a href="language.types.null.php" class="type null">null</a></span>,
       or an <span class="type"><a href="language.types.object.php" class="type object">object</a></span> that implements the <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a>
       method. You cannot use <span class="function"><strong>strval()</strong></span> on arrays or on
       objects that do not implement the
       <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a> method.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.strval-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   The <span class="type"><a href="language.types.string.php" class="type string">string</a></span> value of <code class="parameter">value</code>.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.strval-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-5669">
    <p><strong>Example #1 
     <span class="function"><strong>strval()</strong></span> example using PHP magic
     <a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a> method.
    </strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">StrValTest<br /></span><span style="color: #007700">{<br />    public function </span><span style="color: #0000BB">__toString</span><span style="color: #007700">()<br />    {<br />        return </span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">;<br />    }<br />}<br /><br /></span><span style="color: #FF8000">// Prints 'StrValTest'<br /></span><span style="color: #007700">echo </span><span style="color: #0000BB">strval</span><span style="color: #007700">(new </span><span style="color: #0000BB">StrValTest</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.strval-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.boolval.php" class="function" rel="rdfs-seeAlso">boolval()</a> - Get the boolean value of a variable</span></li>
    <li><span class="function"><a href="function.floatval.php" class="function" rel="rdfs-seeAlso">floatval()</a> - Get float value of a variable</span></li>
    <li><span class="function"><a href="function.intval.php" class="function" rel="rdfs-seeAlso">intval()</a> - Get the integer value of a variable</span></li>
    <li><span class="function"><a href="function.settype.php" class="function" rel="rdfs-seeAlso">settype()</a> - Set the type of a variable</span></li>
    <li><span class="function"><a href="function.sprintf.php" class="function" rel="rdfs-seeAlso">sprintf()</a> - Return a formatted string</span></li>
    <li><span class="function"><a href="function.number-format.php" class="function" rel="rdfs-seeAlso">number_format()</a> - Format a number with grouped thousands</span></li>
    <li><a href="language.types.type-juggling.php" class="link">Type juggling</a></li>
    <li><a href="language.oop5.magic.php#object.tostring" class="link">__toString()</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/var/functions/strval.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.strval%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.strval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strval.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">7 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="119421">  <div class="votes">
    <div id="Vu119421">
    <a href="/manual/vote-note.php?id=119421&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119421">
    <a href="/manual/vote-note.php?id=119421&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119421" title="69% like this...">
    19
    </div>
  </div>
  <a href="#119421" class="name">
  <strong class="user"><em>Mark Clements</em></strong></a><a class="genanchor" href="#119421"> &para;</a><div class="date" title="2016-06-02 01:17"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119421">
<div class="phpcode"><code><span class="html">Some notes about how this function has changed over time, with regards the following statement:<br /><br />&gt; You cannot use strval() on arrays or on objects that <br />&gt; do not implement the __toString() method. <br /><br />== Arrays ==<br /><br />In PHP 5.3 and below, strval(array(1, 2, 3)) would return the string "Array" without any sort of error occurring.<br /><br />From 5.4 and above, the return value is unchanged but you will now get a notice-level error: "Array to string conversion".<br /><br />== Objects ==<br /><br />For objects that do not implement __toString(), the behaviour has varied:<br /><br />PHP 4: "Object"<br />PHP 5 &lt; 5.2: "Object id #1" (number obviously varies)<br />PHP &gt;= 5.2: Catchable fatal error:  Object of class X could not be converted to string</span></code></div>
  </div>
 </div>
  <div class="note" id="77266">  <div class="votes">
    <div id="Vu77266">
    <a href="/manual/vote-note.php?id=77266&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd77266">
    <a href="/manual/vote-note.php?id=77266&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V77266" title="66% like this...">
    17
    </div>
  </div>
  <a href="#77266" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#77266"> &para;</a><div class="date" title="2007-08-21 08:53"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom77266">
<div class="phpcode"><code><span class="html">As of PHP 5.2, strval() will return the string value of an object, calling its __toString() method to determine what that value is.</span></code></div>
  </div>
 </div>
  <div class="note" id="41988">  <div class="votes">
    <div id="Vu41988">
    <a href="/manual/vote-note.php?id=41988&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd41988">
    <a href="/manual/vote-note.php?id=41988&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V41988" title="59% like this...">
    19
    </div>
  </div>
  <a href="#41988" class="name">
  <strong class="user"><em>Tom Nicholson</em></strong></a><a class="genanchor" href="#41988"> &para;</a><div class="date" title="2004-04-28 09:13"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom41988">
<div class="phpcode"><code><span class="html">If you want to convert an integer into an English word string, eg. 29 -&gt; twenty-nine, then here's a function to do it.<br /><br />Note on use of fmod()<br />  I used the floating point fmod() in preference to the % operator, because % converts the operands to int, corrupting values outside of the range [-2147483648, 2147483647]<br /><br />I haven't bothered with "billion" because the word means 10e9 or 10e12 depending who you ask.<br /><br />The function returns '#' if the argument does not represent a whole number.<br /><br /><span class="default">&lt;?php<br />$nwords </span><span class="keyword">= array( </span><span class="string">"zero"</span><span class="keyword">, </span><span class="string">"one"</span><span class="keyword">, </span><span class="string">"two"</span><span class="keyword">, </span><span class="string">"three"</span><span class="keyword">, </span><span class="string">"four"</span><span class="keyword">, </span><span class="string">"five"</span><span class="keyword">, </span><span class="string">"six"</span><span class="keyword">, </span><span class="string">"seven"</span><span class="keyword">,<br />                   </span><span class="string">"eight"</span><span class="keyword">, </span><span class="string">"nine"</span><span class="keyword">, </span><span class="string">"ten"</span><span class="keyword">, </span><span class="string">"eleven"</span><span class="keyword">, </span><span class="string">"twelve"</span><span class="keyword">, </span><span class="string">"thirteen"</span><span class="keyword">,<br />                   </span><span class="string">"fourteen"</span><span class="keyword">, </span><span class="string">"fifteen"</span><span class="keyword">, </span><span class="string">"sixteen"</span><span class="keyword">, </span><span class="string">"seventeen"</span><span class="keyword">, </span><span class="string">"eighteen"</span><span class="keyword">,<br />                   </span><span class="string">"nineteen"</span><span class="keyword">, </span><span class="string">"twenty"</span><span class="keyword">, </span><span class="default">30 </span><span class="keyword">=&gt; </span><span class="string">"thirty"</span><span class="keyword">, </span><span class="default">40 </span><span class="keyword">=&gt; </span><span class="string">"forty"</span><span class="keyword">,<br />                   </span><span class="default">50 </span><span class="keyword">=&gt; </span><span class="string">"fifty"</span><span class="keyword">, </span><span class="default">60 </span><span class="keyword">=&gt; </span><span class="string">"sixty"</span><span class="keyword">, </span><span class="default">70 </span><span class="keyword">=&gt; </span><span class="string">"seventy"</span><span class="keyword">, </span><span class="default">80 </span><span class="keyword">=&gt; </span><span class="string">"eighty"</span><span class="keyword">,<br />                   </span><span class="default">90 </span><span class="keyword">=&gt; </span><span class="string">"ninety" </span><span class="keyword">);<br /><br />function </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">) {<br />   global </span><span class="default">$nwords</span><span class="keyword">;<br /><br />   if(!</span><span class="default">is_numeric</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">))<br />      </span><span class="default">$w </span><span class="keyword">= </span><span class="string">'#'</span><span class="keyword">;<br />   else if(</span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">) != </span><span class="default">0</span><span class="keyword">)<br />      </span><span class="default">$w </span><span class="keyword">= </span><span class="string">'#'</span><span class="keyword">;<br />   else {<br />      if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">0</span><span class="keyword">) {<br />         </span><span class="default">$w </span><span class="keyword">= </span><span class="string">'minus '</span><span class="keyword">;<br />         </span><span class="default">$x </span><span class="keyword">= -</span><span class="default">$x</span><span class="keyword">;<br />      } else<br />         </span><span class="default">$w </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />      </span><span class="comment">// ... now $x is a non-negative integer.<br /><br />      </span><span class="keyword">if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">21</span><span class="keyword">)   </span><span class="comment">// 0 to 20<br />         </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">$nwords</span><span class="keyword">[</span><span class="default">$x</span><span class="keyword">];<br />      else if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">) {   </span><span class="comment">// 21 to 99<br />         </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">$nwords</span><span class="keyword">[</span><span class="default">10 </span><span class="keyword">* </span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">10</span><span class="keyword">)];<br />         </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">);<br />         if(</span><span class="default">$r </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="string">'-'</span><span class="keyword">. </span><span class="default">$nwords</span><span class="keyword">[</span><span class="default">$r</span><span class="keyword">];<br />      } else if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">1000</span><span class="keyword">) {   </span><span class="comment">// 100 to 999<br />         </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">$nwords</span><span class="keyword">[</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">100</span><span class="keyword">)] .</span><span class="string">' hundred'</span><span class="keyword">;<br />         </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br />         if(</span><span class="default">$r </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">)<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="string">' and '</span><span class="keyword">. </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />      } else if(</span><span class="default">$x </span><span class="keyword">&lt; </span><span class="default">1000000</span><span class="keyword">) {   </span><span class="comment">// 1000 to 999999<br />         </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">1000</span><span class="keyword">)) .</span><span class="string">' thousand'</span><span class="keyword">;<br />         </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">1000</span><span class="keyword">);<br />         if(</span><span class="default">$r </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">;<br />            if(</span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">)<br />               </span><span class="default">$w </span><span class="keyword">.= </span><span class="string">'and '</span><span class="keyword">;<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />         }<br />      } else {    </span><span class="comment">//  millions<br />         </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">floor</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">/</span><span class="default">1000000</span><span class="keyword">)) .</span><span class="string">' million'</span><span class="keyword">;<br />         </span><span class="default">$r </span><span class="keyword">= </span><span class="default">fmod</span><span class="keyword">(</span><span class="default">$x</span><span class="keyword">, </span><span class="default">1000000</span><span class="keyword">);<br />         if(</span><span class="default">$r </span><span class="keyword">&gt; </span><span class="default">0</span><span class="keyword">) {<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="string">' '</span><span class="keyword">;<br />            if(</span><span class="default">$r </span><span class="keyword">&lt; </span><span class="default">100</span><span class="keyword">)<br />               </span><span class="default">$word </span><span class="keyword">.= </span><span class="string">'and '</span><span class="keyword">;<br />            </span><span class="default">$w </span><span class="keyword">.= </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">$r</span><span class="keyword">);<br />         }<br />      }<br />   }<br />   return </span><span class="default">$w</span><span class="keyword">;<br />}<br /><br /></span><span class="default">?&gt;<br /></span><br />Usage:<br /><span class="default">&lt;?php<br /></span><span class="keyword">echo </span><span class="string">'There are currently '</span><span class="keyword">. </span><span class="default">int_to_words</span><span class="keyword">(</span><span class="default">$count</span><span class="keyword">) . </span><span class="string">' members logged on.'</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="57559">  <div class="votes">
    <div id="Vu57559">
    <a href="/manual/vote-note.php?id=57559&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd57559">
    <a href="/manual/vote-note.php?id=57559&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V57559" title="61% like this...">
    14
    </div>
  </div>
  <a href="#57559" class="name">
  <strong class="user"><em>php at ianco dot co dot uk</em></strong></a><a class="genanchor" href="#57559"> &para;</a><div class="date" title="2005-10-07 04:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom57559">
<div class="phpcode"><code><span class="html">I can't help being surprised that<br /><br />(string)"0" == (string)"0.00"<br /><br />evaluates to true. It's the same with strval and single quotes.<br />=== avoids it.<br /><br />Why does it matter? One of my suppliers, unbelievably, uses 0 to mean standard discount and 0.00 to mean no discount in their stock files.</span></code></div>
  </div>
 </div>
  <div class="note" id="75496">  <div class="votes">
    <div id="Vu75496">
    <a href="/manual/vote-note.php?id=75496&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75496">
    <a href="/manual/vote-note.php?id=75496&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75496" title="60% like this...">
    11
    </div>
  </div>
  <a href="#75496" class="name">
  <strong class="user"><em>kendsnyder+phpnet at gmail dot com</em></strong></a><a class="genanchor" href="#75496"> &para;</a><div class="date" title="2007-06-01 10:08"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75496">
<div class="phpcode"><code><span class="html">The only way to convert a large float to a string is to use printf('%0.0f',$float); instead of strval($float); (php 5.1.4).<br /><br />// strval() will lose digits around pow(2,45);<br />echo pow(2,50); // 1.1258999068426E+015<br />echo (string)pow(2,50); // 1.1258999068426E+015<br />echo strval(pow(2,50)); // 1.1258999068426E+015<br /><br />// full conversion<br />printf('%0.0f',pow(2,50)); // 112589906846624<br />echo sprintf('%0.0f',pow(2,50)); // 112589906846624</span></code></div>
  </div>
 </div>
  <div class="note" id="75682">  <div class="votes">
    <div id="Vu75682">
    <a href="/manual/vote-note.php?id=75682&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75682">
    <a href="/manual/vote-note.php?id=75682&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75682" title="47% like this...">
    -2
    </div>
  </div>
  <a href="#75682" class="name">
  <strong class="user"><em>NyctoFixer at gmail dot com</em></strong></a><a class="genanchor" href="#75682"> &para;</a><div class="date" title="2007-06-11 12:19"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75682">
<div class="phpcode"><code><span class="html">As of PHP 5.1.4 (I have not tested it in later versions), the strval function does not attempt to invoke the __toString method when it encounters an object. This simple wrapper function will handle this circumstance for you:<br /><br />&lt;?<br /><br />/**<br /> * Returns the string value of a variable<br /> *<br /> * This differs from strval in that it invokes __toString if an object is given<br /> * and the object has that method<br /> */<br />function stringVal ($value)<br />{<br />    // We use get_class_methods instead of method_exists to ensure that __toString is a public method<br />    if (is_object($value) &amp;&amp; in_array("__toString", get_class_methods($value)))<br />        return strval($value-&gt;__toString());<br />    else<br />        return strval($value);<br />}<br /><br />?&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="56605">  <div class="votes">
    <div id="Vu56605">
    <a href="/manual/vote-note.php?id=56605&amp;page=function.strval&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56605">
    <a href="/manual/vote-note.php?id=56605&amp;page=function.strval&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56605" title="44% like this...">
    -3
    </div>
  </div>
  <a href="#56605" class="name">
  <strong class="user"><em>Steve Ball</em></strong></a><a class="genanchor" href="#56605"> &para;</a><div class="date" title="2005-09-08 07:18"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56605">
<div class="phpcode"><code><span class="html">It seems that one is being treated as an unsigned large int (32 bit), and the other as a signed large int (which has rolled over/under).<br /><br />2326201276 - (-1968766020) =  4294967296.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.strval&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.strval.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.var.php">Variable handling Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.boolval.php" title="boolval">boolval</a>
                        </li>
                                                <li class="">
                            <a href="function.debug-zval-dump.php" title="debug_&#8203;zval_&#8203;dump">debug_&#8203;zval_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.doubleval.php" title="doubleval">doubleval</a>
                        </li>
                                                <li class="">
                            <a href="function.empty.php" title="empty">empty</a>
                        </li>
                                                <li class="">
                            <a href="function.floatval.php" title="floatval">floatval</a>
                        </li>
                                                <li class="">
                            <a href="function.get-debug-type.php" title="get_&#8203;debug_&#8203;type">get_&#8203;debug_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.get-defined-vars.php" title="get_&#8203;defined_&#8203;vars">get_&#8203;defined_&#8203;vars</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-id.php" title="get_&#8203;resource_&#8203;id">get_&#8203;resource_&#8203;id</a>
                        </li>
                                                <li class="">
                            <a href="function.get-resource-type.php" title="get_&#8203;resource_&#8203;type">get_&#8203;resource_&#8203;type</a>
                        </li>
                                                <li class="">
                            <a href="function.gettype.php" title="gettype">gettype</a>
                        </li>
                                                <li class="">
                            <a href="function.intval.php" title="intval">intval</a>
                        </li>
                                                <li class="">
                            <a href="function.is-array.php" title="is_&#8203;array">is_&#8203;array</a>
                        </li>
                                                <li class="">
                            <a href="function.is-bool.php" title="is_&#8203;bool">is_&#8203;bool</a>
                        </li>
                                                <li class="">
                            <a href="function.is-callable.php" title="is_&#8203;callable">is_&#8203;callable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-countable.php" title="is_&#8203;countable">is_&#8203;countable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-double.php" title="is_&#8203;double">is_&#8203;double</a>
                        </li>
                                                <li class="">
                            <a href="function.is-float.php" title="is_&#8203;float">is_&#8203;float</a>
                        </li>
                                                <li class="">
                            <a href="function.is-int.php" title="is_&#8203;int">is_&#8203;int</a>
                        </li>
                                                <li class="">
                            <a href="function.is-integer.php" title="is_&#8203;integer">is_&#8203;integer</a>
                        </li>
                                                <li class="">
                            <a href="function.is-iterable.php" title="is_&#8203;iterable">is_&#8203;iterable</a>
                        </li>
                                                <li class="">
                            <a href="function.is-long.php" title="is_&#8203;long">is_&#8203;long</a>
                        </li>
                                                <li class="">
                            <a href="function.is-null.php" title="is_&#8203;null">is_&#8203;null</a>
                        </li>
                                                <li class="">
                            <a href="function.is-numeric.php" title="is_&#8203;numeric">is_&#8203;numeric</a>
                        </li>
                                                <li class="">
                            <a href="function.is-object.php" title="is_&#8203;object">is_&#8203;object</a>
                        </li>
                                                <li class="">
                            <a href="function.is-real.php" title="is_&#8203;real">is_&#8203;real</a>
                        </li>
                                                <li class="">
                            <a href="function.is-resource.php" title="is_&#8203;resource">is_&#8203;resource</a>
                        </li>
                                                <li class="">
                            <a href="function.is-scalar.php" title="is_&#8203;scalar">is_&#8203;scalar</a>
                        </li>
                                                <li class="">
                            <a href="function.is-string.php" title="is_&#8203;string">is_&#8203;string</a>
                        </li>
                                                <li class="">
                            <a href="function.isset.php" title="isset">isset</a>
                        </li>
                                                <li class="">
                            <a href="function.print-r.php" title="print_&#8203;r">print_&#8203;r</a>
                        </li>
                                                <li class="">
                            <a href="function.serialize.php" title="serialize">serialize</a>
                        </li>
                                                <li class="">
                            <a href="function.settype.php" title="settype">settype</a>
                        </li>
                                                <li class="current">
                            <a href="function.strval.php" title="strval">strval</a>
                        </li>
                                                <li class="">
                            <a href="function.unserialize.php" title="unserialize">unserialize</a>
                        </li>
                                                <li class="">
                            <a href="function.unset.php" title="unset">unset</a>
                        </li>
                                                <li class="">
                            <a href="function.var-dump.php" title="var_&#8203;dump">var_&#8203;dump</a>
                        </li>
                                                <li class="">
                            <a href="function.var-export.php" title="var_&#8203;export">var_&#8203;export</a>
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
