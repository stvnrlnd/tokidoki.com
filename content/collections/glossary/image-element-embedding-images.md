---
id: 3ddbe3fc-d82d-47fc-9501-96311cf348d4
blueprint: html
title: 'Img Element: Embedding Images'
teaser: 'The img HTML element is used to embed images in a webpage, requiring a source URL and supporting attributes like alt text for accessibility.'
reference_title:
  code: '<img>'
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
        text: '<img>'
      -
        type: text
        text: ' HTML element is used to embed images in a webpage. It is a self-closing, void element, meaning it does not have a closing tag. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<img>'
      -
        type: text
        text: ' element is crucial for adding visual content to web pages, enhancing the user experience by providing context, decoration, or information through images.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Attributes'
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
        text: '<img>'
      -
        type: text
        text: ' element requires the '
      -
        type: text
        marks:
          -
            type: code
        text: src
      -
        type: text
        text: ' attribute, which specifies the path to the image file, and the '
      -
        type: text
        marks:
          -
            type: code
        text: alt
      -
        type: text
        text: ' attribute, which provides alternative text for the image. The '
      -
        type: text
        marks:
          -
            type: code
        text: alt
      -
        type: text
        text: ' attribute is important for accessibility, as it describes the image content to users who rely on screen readers or when the image cannot be displayed. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<img>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: '<img src="path/to/image.jpg" alt="A description of the image" width="600" height="400">'
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
        text: '<img>'
  -
    type: set
    attrs:
      id: m0h81xnx
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
              - 'Specifies the URL of the image file.'
          -
            cells:
              - alt
              - 'Provides alternative text for the image, used for accessibility and when the image cannot be displayed.'
          -
            cells:
              - width
              - 'Specifies the width of the image in pixels.'
          -
            cells:
              - height
              - 'Specifies the height of the image in pixels.'
          -
            cells:
              - srcset
              - 'Defines a set of images for different device resolutions or conditions.'
          -
            cells:
              - sizes
              - 'Specifies the image sizes for different viewport widths, used with srcset.'
          -
            cells:
              - loading
              - 'Indicates how the browser should load the image (`lazy` or eager).'
          -
            cells:
              - crossorigin
              - 'Configures the CORS requests for the image.'
          -
            cells:
              - usemap
              - 'Associates the image with a <map> element for client-side image maps.'
          -
            cells:
              - ismap
              - 'Indicates that the image is part of a server-side image map.'
          -
            cells:
              - decoding
              - 'Suggests how the browser should decode the image (`async`, sync, auto).'
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
                text: Accessibility
              -
                type: text
                text: ': Using the '
              -
                type: text
                marks:
                  -
                    type: code
                text: alt
              -
                type: text
                text: ' attribute is crucial for accessibility, as it provides a text alternative for users who cannot see the image.'
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
                text: 'Responsive Design'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: srcset
              -
                type: text
                text: ' and '
              -
                type: text
                marks:
                  -
                    type: code
                text: sizes
              -
                type: text
                text: ' attributes allow developers to serve different image sizes based on device resolution and viewport size, optimizing performance and user experience.'
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
                text: 'Loading Optimization'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: loading
              -
                type: text
                text: ' attribute can improve page load times by deferring the loading of off-screen images with '
              -
                type: text
                marks:
                  -
                    type: code
                text: lazy
              -
                type: text
                text: ' loading.'
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
        text: '<img>'
      -
        type: text
        text: ' element is a fundamental part of HTML for embedding images in web pages. Its attributes provide flexibility for accessibility, performance optimization, and responsive design, making it an essential tool for creating visually rich and user-friendly websites.'
link: 'https://html.spec.whatwg.org/multipage/embedded-content.html#the-img-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: image_and_multimedia
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366232
seo_title: 'HTML Img Element: Image Embedding Explained'
seo_description: 'Learn about the img HTML element for embedding images, enhancing webpages with visual content and accessibility features.'
og_title: 'Understanding the HTML Img Element'
og_description: 'Discover how the img element in HTML is used to incorporate images into webpages, providing visual content with attributes for accessibility and customization.'
date: '2025-03-30'
---
