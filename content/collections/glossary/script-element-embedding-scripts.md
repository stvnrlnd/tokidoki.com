---
id: 1999c893-7404-4649-9fc1-3698a3afae83
blueprint: html
title: 'Script Element: Embedding Scripts'
teaser: 'The script HTML element is used to embed or reference executable scripts within a webpage, such as JavaScript. It enables dynamic content, interactive features, and enhanced functionality by allowing the inclusion of client-side scripts.'
reference_title:
  code: '<script>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
      -
        type: text
        text: ' HTML element is used to embed or reference executable code, typically JavaScript, within an HTML document. It is a powerful element that allows developers to add dynamic behavior and interactivity to web pages. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
      -
        type: text
        text: ' element can contain inline code or reference external script files.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
      -
        type: text
        text: ' element can be placed in the '
      -
        type: text
        marks:
          -
            type: code
        text: '<head>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<body>'
      -
        type: text
        text: ', or at the end of the document, depending on when the script needs to be executed. It can either include inline JavaScript code or reference an external script file using the '
      -
        type: text
        marks:
          -
            type: code
        text: src
      -
        type: text
        text: ' attribute. Here are examples of both methods:'
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Inline Script:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <script>
            console.log('Hello, World!');
          </script>
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'External Script:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: '<script src="script.js"></script>'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
  -
    type: set
    attrs:
      id: m0ij0nr3
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - src
              - 'Specifies the URL of an external script file.'
          -
            cells:
              - type
              - 'Specifies the MIME type of the script. The default is text/javascript.'
          -
            cells:
              - async
              - 'A Boolean attribute that allows the script to be executed asynchronously with the rest of the page. Only for external scripts.'
          -
            cells:
              - defer
              - 'A Boolean attribute that defers the execution of the script until the HTML document has been fully parsed. Only for external scripts.'
          -
            cells:
              - charset
              - 'Specifies the character encoding of the external script file.'
          -
            cells:
              - crossorigin
              - 'Configures the CORS requests for the script.'
          -
            cells:
              - integrity
              - 'Allows browsers to verify that a fetched script has been delivered without unexpected manipulation.'
          -
            cells:
              - nomodule
              - 'Specifies that the script should not be executed in browsers that support module scripts.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Dynamic Content'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<script>'
              -
                type: text
                text: ' element enables the addition of dynamic content and interactivity to web pages, enhancing the user experience.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Performance
              -
                type: text
                text: ': Using '
              -
                type: text
                marks:
                  -
                    type: code
                text: async
              -
                type: text
                text: ' and '
              -
                type: text
                marks:
                  -
                    type: code
                text: defer
              -
                type: text
                text: ' attributes can improve page load performance by controlling when scripts are executed relative to the parsing of the document.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Security
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: integrity
              -
                type: text
                text: ' attribute helps ensure that external scripts are not tampered with, providing an additional layer of security.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
      -
        type: text
        text: ' element is a fundamental part of web development, allowing for the inclusion of JavaScript to create interactive and dynamic web pages. Its attributes provide flexibility for managing script execution and enhancing performance and security. Proper use of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<script>'
      -
        type: text
        text: ' element is essential for building responsive and engaging web applications.'
link: 'https://html.spec.whatwg.org/multipage/scripting.html#the-script-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: scripting
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366594
seo_title: 'HTML Script Element: Embedding Scripts Explained'
seo_description: 'Explore the script HTML element for embedding or linking scripts, enhancing webpages with dynamic content and interactivity.'
og_title: 'Understanding the HTML Script Element'
og_description: 'Learn how the script element in HTML is used to incorporate executable scripts, adding interactivity and dynamic features to webpages through client-side scripting.'
date: '2025-03-30'
---
