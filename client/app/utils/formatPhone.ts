export function formatPhone(phone: string): string {
  if (!phone) return ''
  let digits = phone.replace(/\D/g, '')
  if (digits.length === 11 && digits[0] === '8') digits = '375' + digits.slice(1)
  if (digits.length === 13 && digits.startsWith('375')) digits = digits.slice(0, 12)
  if (digits.length === 12 && digits.startsWith('375')) {
    return `${digits.slice(0,3)}-${digits.slice(3,5)}-${digits.slice(5,7)}-${digits.slice(7,10)}-${digits.slice(10,12)}`
  }
  if (digits.length === 9) {
    return `375-${digits.slice(0,2)}-${digits.slice(2,4)}-${digits.slice(4,7)}-${digits.slice(7,9)}`
  }
  return phone
}