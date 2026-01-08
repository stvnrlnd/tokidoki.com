---
id: b1f6c322-6482-400d-b078-942d5c843373
blueprint: html
title: 'Meter Element: Displaying Scalar Measurements'
teaser: 'The meter HTML element is used to represent a scalar measurement within a known range or a fractional value, such as disk usage or voting percentages. It visually displays this data as a gauge, with attributes to define the range and current value.'
reference_title:
  code: '<meter>'
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
        text: '<meter>'
      -
        type: text
        text: ' HTML element is used to represent a scalar measurement within a known range, or a fractional value. This element is ideal for displaying data that falls within a specific range, such as disk usage, temperature, or progress toward a goal. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<meter>'
      -
        type: text
        text: ' element is different from the '
      -
        type: text
        marks:
          -
            type: code
        text: '<progress>'
      -
        type: text
        text: ' element, which is used to indicate the progress of a task.'
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
        text: '<meter>'
      -
        type: text
        text: ' element is typically used to display a value within a bounded range, with attributes to define the range and the current value. It provides a visual representation of the data, often rendered as a horizontal bar. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<meter>'
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
        text: |-
          <label for="disk-usage">Disk Usage:</label>
          <meter id="disk-usage" value="0.6" min="0" max="1">60%</meter>
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
        text: '<meter>'
  -
    type: set
    attrs:
      id: m0igqm49
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
              - value
              - 'Specifies the current value of the measurement.'
          -
            cells:
              - min
              - 'Defines the minimum value of the range.'
          -
            cells:
              - max
              - 'Defines the maximum value of the range.'
          -
            cells:
              - low
              - 'Specifies a lower bound of the "low" range, which can be used for styling.'
          -
            cells:
              - high
              - 'Specifies an upper bound of the "high" range, which can be used for styling.'
          -
            cells:
              - optimum
              - 'Indicates the optimal value or range for the measurement.'
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
        text: '<meter>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
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
                text: 'Semantic Meaning'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<meter>'
              -
                type: text
                text: ' element provides semantic meaning by indicating that the enclosed content represents a measurement within a defined range.'
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
                text: ': Proper use of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<meter>'
              -
                type: text
                text: ' element, including attributes like '
              -
                type: text
                marks:
                  -
                    type: code
                text: min
              -
                type: text
                text: ', '
              -
                type: text
                marks:
                  -
                    type: code
                text: max
              -
                type: text
                text: ', and '
              -
                type: text
                marks:
                  -
                    type: code
                text: value
              -
                type: text
                text: ', enhances accessibility by providing clear information about the measurement to assistive technologies.'
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
                text: 'Styling Flexibility'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<meter>'
              -
                type: text
                text: ' element can be styled using CSS to match the design of the webpage, allowing for customization of its appearance.'
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
        text: '<meter>'
      -
        type: text
        text: ' element is a useful tool for displaying measurements within a defined range. It provides semantic clarity and visual representation of data, enhancing both the accessibility and usability of web content. Its attributes allow developers to specify the range and current value, making it suitable for various applications where scalar measurements are needed.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-meter-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366402
seo_title: 'HTML Meter Element: Scalar Measurement Explained'
seo_description: 'Explore the meter HTML element for displaying scalar measurements within a known range, using attributes like value, min, and max.'
og_title: 'Understanding the HTML Meter Element'
og_description: 'Learn how the meter element in HTML is used to display scalar values within a defined range, providing a visual gauge for data like disk usage or voting results.'
date: '2025-03-30'
---
