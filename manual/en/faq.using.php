<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Using PHP - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/faq.using.php">
 <link rel="shorturl" href="https://www.php.net/using">
 <link rel="alternate" href="https://www.php.net/using" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/faq.php">
 <link rel="prev" href="https://www.php.net/manual/en/faq.build.php">
 <link rel="next" href="https://www.php.net/manual/en/faq.passwords.php">

 <link rel="alternate" href="https://www.php.net/manual/en/faq.using.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/faq.using.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/faq.using.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/faq.using.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/faq.using.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/faq.using.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/faq.using.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/faq.using.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/faq.using.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/faq.using.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/faq.using.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Using PHP" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Using PHP - Manual" />
<meta name="twitter:description" content="Using PHP" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Using PHP - Manual" />
<meta itemprop="description" content="Using PHP" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Using PHP" />

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
        <a href="faq.passwords.php">
          Password Hashing &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="faq.build.php">
          &laquo; Build Problems        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='faq.php'>FAQ</a></li>      </ul>
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
            <option value='en/faq.using.php' selected="selected">English</option>
            <option value='de/faq.using.php'>German</option>
            <option value='es/faq.using.php'>Spanish</option>
            <option value='fr/faq.using.php'>French</option>
            <option value='it/faq.using.php'>Italian</option>
            <option value='ja/faq.using.php'>Japanese</option>
            <option value='pt_BR/faq.using.php'>Brazilian Portuguese</option>
            <option value='ru/faq.using.php'>Russian</option>
            <option value='tr/faq.using.php'>Turkish</option>
            <option value='uk/faq.using.php'>Ukrainian</option>
            <option value='zh/faq.using.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="faq.using" class="chapter">
  <h1 class="title">Using PHP</h1>

  

  <p class="para">
   This section gathers many common errors that you may face 
   while writing PHP scripts.
  </p>

  <div class="qandaset"><ol class="qandaset_questions"><li><a href="#faq.using.parameterorder">
     
      I cannot remember the parameter order of PHP functions, are they random?
     
    </a></li><li><a href="#faq.using.anyform">
     
      I would like to write a generic PHP script that can handle data coming 
      from any form. How do I know which POST method variables are available?
     
    </a></li><li><a href="#faq.using.addslashes">
     
      I need to convert all single-quotes (&#039;) to a backslash 
      followed by a single-quote (\&#039;). How can I do this with a 
      regular expression?  I&#039;d also like to convert &quot; to \&quot; and
      \ to \\.
     
    </a></li><li><a href="#faq.using.wrong-order">
     
      When I do the following, the output is printed in 
      the wrong order: 
     

&lt;?php
function myfunc($argument)
{
    echo $argument + 10;
}
$variable = 10;
echo &quot;myfunc($variable) = &quot; . myfunc($variable);
?&gt;

    
     what&#039;s going on?
     
    </a></li><li><a href="#faq.using.newlines">
     
      Hey, what happened to my newlines?
      

&lt;pre&gt;
&lt;?php echo &quot;This should be the first line.&quot;; ?&gt;
&lt;?php echo &quot;This should show up after the new line above.&quot;; ?&gt;
&lt;/pre&gt;

      
     
    </a></li><li><a href="#faq.using.headers-sent">
     
      I get the message &#039;Warning: Cannot send session cookie - headers already
      sent...&#039; or &#039;Cannot add header information - headers already sent...&#039;.
     
    </a></li><li><a href="#faq.using.header">
     
      I need to access information in the request header directly. 
      How can I do this?
     
    </a></li><li><a href="#faq.using.authentication">
     
      When I try to use authentication with IIS I get &#039;No Input file specified&#039;.
     
    </a></li><li><a href="#faq.using.iis.sharing">
     
      Windows: I can&#039;t access files shared on another computer using IIS
     
    </a></li><li><a href="#faq.using.mixml">
     
      How am I supposed to mix XML and PHP? It complains 
      about my &lt;?xml tags!
     
    </a></li><li><a href="#faq.using.variables">
     
      Where can I find a complete list of variables are available to me 
      in PHP?
     
    </a></li><li><a href="#faq.using.freepdf">
     
      How can I generate PDF files without using the non-free and 
      commercial libraries like 
      PDFLib?  I&#039;d like something that&#039;s 
      free and doesn&#039;t require external PDF libraries.
     
    </a></li><li><a href="#faq.using.shorthandbytes">
     
      A few PHP directives may also take on shorthand byte values, as opposed
      to only int byte values.  What are all the available
      shorthand byte options?
     
    </a></li></ol></div>

   <dl class="qandaentry" id="faq.using.parameterorder">
    
    <dt><strong>
     
      I cannot remember the parameter order of PHP functions, are they random?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      PHP is a glue that brings together hundreds of external libraries, so sometimes
      this gets messy. However, a simple rule of thumb is as follows: 
     </p>
     <p class="para">
      <a href="book.array.php" class="link">Array function</a> parameters are ordered
      as &quot;<em>needle, haystack</em>&quot; whereas 
      <a href="book.strings.php" class="link">String functions</a> are the opposite,
      so &quot;<em>haystack, needle</em>&quot;.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.anyform">
    <dt><strong>
     
      I would like to write a generic PHP script that can handle data coming 
      from any form. How do I know which POST method variables are available?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      PHP offers many <a href="language.variables.predefined.php" class="link">
      predefined variables</a>, like the superglobal <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var>.
      You may loop through <var class="varname"><a href="reserved.variables.post.php" class="classname">$_POST</a></var>
      as it&#039;s an associate array of all POSTed values.  For example, let&#039;s
      simply loop through it with <a href="control-structures.foreach.php" class="link"><code class="literal">foreach</code></a>, 
      check for <span class="function"><a href="function.empty.php" class="function">empty()</a></span> values,
      and print them out.
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$empty </span><span style="color: #007700">= </span><span style="color: #0000BB">$post </span><span style="color: #007700">= array();<br />foreach (</span><span style="color: #0000BB">$_POST </span><span style="color: #007700">as </span><span style="color: #0000BB">$varname </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$varvalue</span><span style="color: #007700">) {<br />    if (empty(</span><span style="color: #0000BB">$varvalue</span><span style="color: #007700">)) {<br />        </span><span style="color: #0000BB">$empty</span><span style="color: #007700">[</span><span style="color: #0000BB">$varname</span><span style="color: #007700">] = </span><span style="color: #0000BB">$varvalue</span><span style="color: #007700">;<br />    } else {<br />        </span><span style="color: #0000BB">$post</span><span style="color: #007700">[</span><span style="color: #0000BB">$varname</span><span style="color: #007700">] = </span><span style="color: #0000BB">$varvalue</span><span style="color: #007700">;<br />    }<br />}<br /><br />print </span><span style="color: #DD0000">"&lt;pre&gt;"</span><span style="color: #007700">;<br />if (empty(</span><span style="color: #0000BB">$empty</span><span style="color: #007700">)) {<br />    print </span><span style="color: #DD0000">"None of the POSTed values are empty, posted:\n"</span><span style="color: #007700">;<br />    </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">);<br />} else {<br />    print </span><span style="color: #DD0000">"We have " </span><span style="color: #007700">. </span><span style="color: #0000BB">count</span><span style="color: #007700">(</span><span style="color: #0000BB">$empty</span><span style="color: #007700">) . </span><span style="color: #DD0000">" empty values\n"</span><span style="color: #007700">;<br />    print </span><span style="color: #DD0000">"Posted:\n"</span><span style="color: #007700">; </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$post</span><span style="color: #007700">);<br />    print </span><span style="color: #DD0000">"Empty:\n"</span><span style="color: #007700">;  </span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$empty</span><span style="color: #007700">);<br />    exit;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </p>

    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.addslashes">
    
    <dt><strong>
     
      I need to convert all single-quotes (&#039;) to a backslash 
      followed by a single-quote (\&#039;). How can I do this with a 
      regular expression?  I&#039;d also like to convert &quot; to \&quot; and
      \ to \\.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Assuming this is for a database, use the escaping mechanism that
      comes with the database. For example, use 
      <span class="function"><a href="function.mysql-real-escape-string.php" class="function">mysql_real_escape_string()</a></span> with MySQL and
      <span class="function"><a href="function.pg-escape-string.php" class="function">pg_escape_string()</a></span> with PostgreSQL. There is
      also the generic <span class="function"><a href="function.addslashes.php" class="function">addslashes()</a></span> and
      <span class="function"><a href="function.stripslashes.php" class="function">stripslashes()</a></span> functions, that are more
      common with older PHP code.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.wrong-order">
    <dt><strong>
     
      When I do the following, the output is printed in 
      the wrong order: 
     <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">myfunc</span><span style="color: #007700">(</span><span style="color: #0000BB">$argument</span><span style="color: #007700">)<br />{<br />    echo </span><span style="color: #0000BB">$argument </span><span style="color: #007700">+ </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">$variable </span><span style="color: #007700">= </span><span style="color: #0000BB">10</span><span style="color: #007700">;<br />echo </span><span style="color: #DD0000">"myfunc(</span><span style="color: #0000BB">$variable</span><span style="color: #DD0000">) = " </span><span style="color: #007700">. </span><span style="color: #0000BB">myfunc</span><span style="color: #007700">(</span><span style="color: #0000BB">$variable</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

     what&#039;s going on?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      To be able to use the results of your function in an expression (such
      as concatenating it with other strings in the example above), you need
      to <span class="function"><a href="function.return.php" class="function">return</a></span> the value, 
      not <span class="function"><a href="function.echo.php" class="function">echo</a></span> it.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.newlines">
    <dt><strong>
     
      Hey, what happened to my newlines?
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000">&lt;pre&gt;<br /><span style="color: #0000BB">&lt;?php </span><span style="color: #007700">echo </span><span style="color: #DD0000">"This should be the first line."</span><span style="color: #007700">; </span><span style="color: #0000BB">?&gt;<br />&lt;?php </span><span style="color: #007700">echo </span><span style="color: #DD0000">"This should show up after the new line above."</span><span style="color: #007700">; </span><span style="color: #0000BB">?&gt;<br /></span>&lt;/pre&gt;</span></code></div>
      </div>

     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      In PHP, the ending for a block of code is either &quot;?&gt;&quot; or
      &quot;?&gt;\n&quot; (where \n means a newline). So in the example above,
      the echoed sentences will be on one line, because PHP omits
      the newlines after the block ending. This means that you need to
      insert an extra newline after each block of PHP code to make
      it print out one newline.
     </p>
     <p class="para">
      Why does PHP do this? Because when formatting normal HTML, this
      usually makes your life easier because you don&#039;t want that newline,
      but you&#039;d have to create extremely long lines or otherwise make the
      raw page source unreadable to achieve that effect.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.headers-sent">
    <dt><strong>
     
      I get the message &#039;Warning: Cannot send session cookie - headers already
      sent...&#039; or &#039;Cannot add header information - headers already sent...&#039;.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The functions <span class="function"><a href="function.header.php" class="function">header()</a></span>, <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span>,
      and the <a href="ref.session.php" class="link">session 
      functions</a> need to add headers to the output stream but headers 
      can only be sent before all other content.  There can be no output
      before using these functions, output such as HTML.  The function 
      <span class="function"><a href="function.headers-sent.php" class="function">headers_sent()</a></span> will check if your script has already 
      sent headers and see also the <a href="ref.outcontrol.php" class="link">Output Control
      functions</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.header">
    <dt><strong>
     
      I need to access information in the request header directly. 
      How can I do this?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The <span class="function"><a href="function.getallheaders.php" class="function">getallheaders()</a></span> function will do this if 
      you are running PHP as an Apache module. So, the following bit
      of code will show you all the request headers:
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$headers </span><span style="color: #007700">= </span><span style="color: #0000BB">getallheaders</span><span style="color: #007700">();<br />foreach (</span><span style="color: #0000BB">$headers </span><span style="color: #007700">as </span><span style="color: #0000BB">$name </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$content</span><span style="color: #007700">) {<br />    echo </span><span style="color: #DD0000">"headers[</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">] = </span><span style="color: #0000BB">$content</span><span style="color: #DD0000">&lt;br /&gt;\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
      </div>

     </p>
     <p class="para">
      See also 
      <span class="function"><a href="function.apache-lookup-uri.php" class="function">apache_lookup_uri()</a></span>,
      <span class="function"><a href="function.apache-response-headers.php" class="function">apache_response_headers()</a></span>, and
      <span class="function"><a href="function.fsockopen.php" class="function">fsockopen()</a></span>
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.authentication">
    <dt><strong>
     
      When I try to use authentication with IIS I get &#039;No Input file specified&#039;.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The security model of IIS is at fault here. This is a problem
      common to all CGI programs running under IIS. A workaround is
      to create a plain HTML file (not parsed by PHP) as the entry page
      into an authenticated directory. Then use a META tag to redirect
      to the PHP page, or have a link to the PHP page. PHP will
      then recognize the authentication correctly.
      This should not affect other
      NT web servers. For more information, see: 
      <a href="http://support.microsoft.com/kb/q160422/" class="link external">&raquo;&nbsp;http://support.microsoft.com/kb/q160422/</a> and the manual
      section on <a href="features.http-auth.php" class="link">HTTP Authentication
      </a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.iis.sharing">
    <dt><strong>
     
      Windows: I can&#039;t access files shared on another computer using IIS
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      You have to change the <code class="literal">Go to Internet Information
      Services</code>. Locate your PHP file and go to its properties.
      Go to the <code class="literal">File Security</code> tab, <code class="literal">Edit -&lt; 
      Anonymous access and authentication control</code>.
     </p>
     <p class="para">
      You can fix the problem either by unticking <code class="literal">Anonymous
      Access</code> and leaving <code class="literal">Integrated Window
      Authentication</code> ticked, or, by ticking <code class="literal">Anonymous
      Access</code> and editing the user as he may not have the access
      right. 
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.mixml">
    <dt><strong>
     
      How am I supposed to mix XML and PHP? It complains 
      about my &lt;?xml tags!
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      In order to embed &lt;?xml straight into your PHP code, you&#039;ll have to turn off
      short tags by having the PHP directive 
      <a href="ini.core.php#ini.short-open-tag" class="link">short_open_tags</a> set to 
      <code class="literal">0</code>.  You cannot set this directive with 
      <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span>.  Regardless of 
      <a href="ini.core.php#ini.short-open-tag" class="link">short_open_tags</a> being on or 
      off, you can do something like: <code class="literal">&lt;?php echo &#039;&lt;?xml&#039;; ?&gt;</code>.  
      The default for this directive is <code class="literal">On</code>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.variables">
    <dt><strong>
     
      Where can I find a complete list of variables are available to me 
      in PHP?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      Read the manual page on <a href="language.variables.predefined.php" class="link">
      predefined variables</a> as it includes a partial list of predefined
      variables available to your script.  A complete list of available
      variables (and much more information) can be seen by calling the 
      <span class="function"><a href="function.phpinfo.php" class="function">phpinfo()</a></span> function.  Be sure to read the manual 
      section on <a href="language.variables.external.php" class="link">variables from 
      outside of PHP</a> as it describes common scenarios for 
      external variables, like from a HTML form, a Cookie, and the URL.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.freepdf">
    <dt><strong>
     
      How can I generate PDF files without using the non-free and 
      commercial libraries like 
      PDFLib?  I&#039;d like something that&#039;s 
      free and doesn&#039;t require external PDF libraries.
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      There are a few alternatives written in PHP such as 
      <a href="http://www.fpdf.org/" class="link external">&raquo;&nbsp;FPDF</a> and
      <a href="http://www.tcpdf.org/" class="link external">&raquo;&nbsp;TCPDF</a>.
     </p>
    </dd>
   </dl>

   <dl class="qandaentry" id="faq.using.shorthandbytes">
    <dt><strong>
     
      A few PHP directives may also take on shorthand byte values, as opposed
      to only <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> byte values.  What are all the available
      shorthand byte options?
     
    </strong></dt>
    <dd class="answer">
     <p class="para">
      The available options are K (for Kilobytes), M (for Megabytes) and G (for
      Gigabytes), and are all case-insensitive.
      Anything else assumes bytes. <code class="literal">1M</code> equals one Megabyte or
      <code class="literal">1048576</code> bytes. <code class="literal">1K</code> equals one
      Kilobyte or <code class="literal">1024</code> bytes. These shorthand notations may
      be used in <var class="filename">php.ini</var> and in the <span class="function"><a href="function.ini-set.php" class="function">ini_set()</a></span> function.
      Note that the numeric value is cast to <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>;
      for instance, <code class="literal">0.5M</code> is interpreted as <code class="literal">0</code>.
     </p>
     <blockquote class="note"><p><strong class="note">Note</strong>: 
      <strong>kilobyte versus kibibyte</strong><br />
      <p class="para">
       The PHP notation describes one kilobyte as equalling 1024 bytes, whereas
       the <abbr>IEC</abbr> standard considers this to be a kibibyte instead.
       Summary: k and K = 1024 bytes.
      </p>
     </p></blockquote>
    </dd>
   </dl>
  
 </div>
    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/faq/using.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffaq.using%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=faq.using&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.using.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="120016">  <div class="votes">
    <div id="Vu120016">
    <a href="/manual/vote-note.php?id=120016&amp;page=faq.using&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120016">
    <a href="/manual/vote-note.php?id=120016&amp;page=faq.using&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120016" title="60% like this...">
    30
    </div>
  </div>
  <a href="#120016" class="name">
  <strong class="user"><em>robjbrain at gmail dot com</em></strong></a><a class="genanchor" href="#120016"> &para;</a><div class="date" title="2016-10-10 04:37"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120016">
<div class="phpcode"><code><span class="html">There is no error message given if you accidentally use KB, MB or GB instead of K, M or G. From what I can tell the alphabetic characters will be ignored and it will be treated as bytes, so 1GB actually equals 1 Byte. phpinfo() and ini_get() will report what you have written e.g. 1GB, so it will not be clear that there is anything wrong with your setting even though there is.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=faq.using&amp;repo=en&amp;redirect=https://www.php.net/manual/en/faq.using.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="faq.php">FAQ</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="faq.general.php" title="General Information">General Information</a>
                        </li>
                                                <li class="">
                            <a href="faq.mailinglist.php" title="Mailing lists">Mailing lists</a>
                        </li>
                                                <li class="">
                            <a href="faq.obtaining.php" title="Obtaining PHP">Obtaining PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.databases.php" title="Database issues">Database issues</a>
                        </li>
                                                <li class="">
                            <a href="faq.installation.php" title="Installation">Installation</a>
                        </li>
                                                <li class="">
                            <a href="faq.build.php" title="Build Problems">Build Problems</a>
                        </li>
                                                <li class="current">
                            <a href="faq.using.php" title="Using PHP">Using PHP</a>
                        </li>
                                                <li class="">
                            <a href="faq.passwords.php" title="Password Hashing">Password Hashing</a>
                        </li>
                                                <li class="">
                            <a href="faq.html.php" title="PHP and HTML">PHP and HTML</a>
                        </li>
                                                <li class="">
                            <a href="faq.com.php" title="PHP and COM">PHP and COM</a>
                        </li>
                                                <li class="">
                            <a href="faq.misc.php" title="Miscellaneous Questions">Miscellaneous Questions</a>
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
