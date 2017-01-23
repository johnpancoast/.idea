/**
 * Set ${FIELD_NAME}
 *
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return $this
 */
## Some of these will be supported in php7
#if (${TYPE_HINT} != '' && ${TYPE_HINT} != 'mixed' && ${TYPE_HINT} != 'string' && ${TYPE_HINT} != 'int')
public ${STATIC} function set${NAME}(${TYPE_HINT}$${PARAM_NAME})
#else
public ${STATIC} function set${NAME}($${PARAM_NAME})
#end
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end

    return $this;
}