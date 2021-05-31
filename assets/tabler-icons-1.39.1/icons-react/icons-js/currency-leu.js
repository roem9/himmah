import * as React from "react";

function IconCurrencyLeu({
  size = 24,
  color = "currentColor",
  stroke = 2,
  ...props
}) {
  return <svg className="icon icon-tabler icon-tabler-currency-leu" width={size} height={size} viewBox="0 0 24 24" strokeWidth={stroke} stroke={color} fill="none" strokeLinecap="round" strokeLinejoin="round" {...props}><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M17 18h-7a3 3 0 0 1 -3 -3v-10" /></svg>;
}

export default IconCurrencyLeu;